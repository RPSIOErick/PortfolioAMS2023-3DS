<?php

namespace App\Http\Controllers;

use App\Models\Alternativas;
use App\Models\Questoes;
use App\Models\ResultSimu;
use Illuminate\Http\Request;

class ControllerSimulado extends Controller
{
    public function VisualizarSimulado(){
        
        $quest_sim = Questoes::paginate(1);

        $total_quest = Questoes::count();

        $alter_sim = Alternativas::query()->get();

        return view ('Simulado', compact('quest_sim', 'total_quest', 'alter_sim'));

    }

    public function responderSimulado(Request $request){
        $acerto_usuario = 0; //Quantidade de acertos do usuário

        $chave_resposta = 'alternativas'; //chave para sessão

        //Cria sessao para salvar resposta anterior
        $respostas = $request->session()->get($chave_resposta, []);
        $respostas[] = $request->input('alternativa');

        // return dd($respostas);
        $request->session()->put('alternativas', $respostas);

        //Caso botão seja de avançar
        if ($request->input('action') == 'next') {
            $request->session()->put('ultima_resposta', $request->input('alternativa'));

            $next_page = $request->input('page') + 1; //avanca contador
            return redirect("/simulado/?page=$next_page"); //redireciona para proxima pagina
        }

        //Caso botão seja de voltar
        if ($request->input('action') == 'previous') {
            $next_page = $request->input('page') - 1; //retrocede contador
            
            array_pop($respostas);// Remover o último item
            // Atualizar a sessão com o array modificado
            $request->session()->put('alternativas', $respostas);

            return redirect("/simulado/?page=$next_page")->with('value-resposta', session()->get('ultima_resposta')); //redireciona para página anterior com última resposta
        }

        // foreach nas respostas do usuário
        foreach($respostas as $resposta){
            $alter_sim = Alternativas::where('id_alternativa', $resposta)->where('alter_true', 1)->get()->first();

            if($alter_sim){
                $acerto_usuario += 1; //soma das respostas corretas
            }
        }        

        
        // Calculo de Erros
        $total_quest = Questoes::count();

        // return $acerto_usuario;

        $erros_total = $total_quest - $acerto_usuario;

        // Calculo da porcentagem de acertos
        $porcentagem_acertos = ($acerto_usuario / $total_quest ) * 100;

        // Exclui a sessão de respostas aqui
        $request->session()->forget($chave_resposta);

        return $this->resultSimu($acerto_usuario, $erros_total, $porcentagem_acertos); //função com tela de resultado

    }

    
    // resultado do simulado
    public function resultSimu($acerto_usuario, $erros_total, $porcentagem_acertos){
        return view('resultSimu', compact('acerto_usuario', 'erros_total', 'porcentagem_acertos'));
    }


    public function salvarSimulado(Request $request){

        $resultado = new ResultSimu();
        $resultado->id_usuario = $request->id_usuario;
        $resultado->id_simu = $request->id_simu;
        $resultado->qntd_acertos = $request->qntd_acertos;
        $resultado->data_conclusao = $request->data_conclusao;

        $resultado->save();

        return redirect('/areadoaluno');

    }
    
}
