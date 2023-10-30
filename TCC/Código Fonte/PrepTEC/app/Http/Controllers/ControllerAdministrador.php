<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Questoes;
use App\Models\Alternativas;
use Illuminate\Http\Request;

class ControllerAdministrador extends Controller
{
    
    public function ListarEstudante(){

        $Estudantes = Usuario::where('tipoUsuario', 'Estudante')
        ->orWhere('tipoUsuario', 'Suspenso')
        ->orWhere('tipoUsuario', 'Desativado')
        ->paginate(5);

        return view('admin.gerenciarAluno.listarAluno', compact('Estudantes'));

    }

    public function ListarEstudanteGerenciar(){

        $Estudantes = Usuario::where('tipoUsuario', 'Estudante')
        ->orWhere('tipoUsuario', 'Suspenso')
        ->orWhere('tipoUsuario', 'Desativado')
        ->paginate(5);

        return view('GerenciarSistema', compact('Estudantes'));

    }

    public function EditarEstudante($id){

        $estudante = Usuario::query()->findOrFail($id);
        
        return view ('admin.gerenciarAluno.editarAluno', compact('estudante'));

    }

    public function AtualizarEstudante(Request $req, $id_estudante){

        $estudante = Usuario::query()->findOrFail($id_estudante);

        $estudante->nome_usuario = $req->nome_usuario;
        $estudante->email_usuario = $req->email_usuario;
        $estudante->tipoUsuario = $req->tipoUsuario;
        $estudante->save();

        return redirect('/aluno/listar');

    }

    public function SalvarQuestoes(Request $req)
    {
        $questao = new Questoes();
        $questao->id_simu = 1;
        $questao->txt_quest = $req->txt_quest;
        $questao->txt_perg = $req->txt_perg;

        $questao->save();

        if ($questao) {

            $txt_alter = $req->input('txt_alter');
            $alter_true = $req->input('alter_true');
            $cont = count($txt_alter);

            for ($i = 0; $i < $cont; $i++) {
                $alternativas = new Alternativas();
                $alternativas->id_quest = $questao->id_quest;
                $alternativas->txt_alter = $txt_alter[$i];

                if ($req->input('alter_true') == $i) {
                    $alternativas->alter_true = 1;
                } else {
                    $alternativas->alter_true = 0;
                }

                $alternativas->save();
            }
        
            return redirect('/simulado/listar');
        }
        else
        {
            return redirect('/simulado/cadastar')->with('Erro', 'Não foi possível salvar a questão...');
        }
        
    }
    
    public function ListarQuestoesSimu(){

        $quests = Questoes::all();

        if($quests->isEmpty()){

            return view('admin.gerenciarSimulado.cadastrarSimulado');

        } else {

            $quests = Questoes::paginate(5);
            return view('admin.gerenciarSimulado.listarSimulado', compact('quests'));

        }

    }

    public function EditarSimulado($id){

        $quest = Questoes::query()->findOrFail($id);

        $alternativas = Alternativas::where('id_quest', $quest->id_quest)->get();

        return view ('admin.gerenciarSimulado.editarSimulado', compact('quest', 'alternativas'));

    }

    public function AtualizarQuestoes(Request $req)
    {
        $questao = Questoes::where('id_quest', $req->id_quest)->first();

        //caso ache questão
        if ($questao) {
            $questao->id_simu = 1;
            $questao->txt_quest = $req->txt_quest;
            $questao->txt_perg = $req->txt_perg;

            $questao->save(); //salva questão

            $alternativa_question = Alternativas::where('id_quest', $questao->id_quest)->get();//Resposta da questão escolhida
            $total_questions = Alternativas::all()->count();//Questões do quiz escolhido

            // Resposta do usuário
            $user_questions = $req->input('alternativas');

            //percorre todas as respostas da pergunta
            foreach ($req->input('alternativas') as $answerData) {

                //caso a resposta já exista no banco
                if(isset($answerData['id_alternativa']) && $answerData['id_alternativa']){

                    //seleciona resposta no banco para atualizar
                    $update_answer = Alternativas::where('id_alternativa', $answerData['id_alternativa'])->first();

                    //atualiza resposta
                    $update_answer->update([
                        'txt_alter' => $answerData['text_alternativas'],
                        'alter_true' => isset($answerData['alternativas_certa']),
                    ]);

                }
            }

            return redirect('/simulado/listar')->with('success', 'Questão atualizada com sucesso!');
        }

    }

    public function ExcluirQuestoes($id_quest)
    {

        $questao = Questoes::find($id_quest);

        if ($questao) {
            // Exclua as alternativas relacionadas
            Alternativas::where('id_quest', $questao->id_quest)->delete();

            // Agora exclua a questão
            $questao->delete();


        }

        return redirect('/simulado/listar');

    }

    public function PesquisarQuestoes(Request $req){

        $query = $req->input('query');
        // Execute a pesquisa no banco de dados usando o Eloquent
        $resultados = Questoes::where('txt_quest', 'like', '%' . $query . '%')->paginate(5);
        return view('admin/gerenciarSimulado/resultadoSimulado', ['resultadoSimulado' => $resultados]);

    }
    public function PesquisarEstudante(Request $req){
        $query = $req->input('query');
    
        // Lista de tipos de usuário permitidos
        $tiposUsuariosPermitidos = ['Estudante', 'Suspenso', 'Desativado'];
    
        // Execute a pesquisa no banco de dados usando o Eloquent
        $resultados = Usuario::where('nome_usuario', 'like', '%' . $query . '%')
                            ->whereIn('tipoUsuario', $tiposUsuariosPermitidos) // Filtra por tipos de usuário permitidos
                            ->paginate(5);
    
        return view('admin/gerenciarAluno/resultadoAluno', ['resultadoAluno' => $resultados]);
    }

}
