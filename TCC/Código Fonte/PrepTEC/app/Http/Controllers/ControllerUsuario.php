<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ControllerUsuario extends Controller
{
    // Função de Criar Conta
    public function CriarConta(Request $request){
        
        // Validação dos dados: nome, email e senha
        $request->validate([

            'nome_usuario' => 'required',
            'email_usuario' => 'required|email|unique:usuario',
            'senha_usuario' => 'required',
            'fotoUsuario' => 'nullable|image|not_in:gif,webp|dimensions:min_width=500,min_height=500'

        ]);

        // Instância do Model "Usuário", requisitando todos os dados
        $user = new Usuario();
        $user->nome_usuario = $request->nome_usuario;
        $user->email_usuario = $request->email_usuario;
        $user->senha_usuario = Hash::make($request->senha_usuario);

        // Nome da foto que foi enviada pelo usuário, requisitando o arquivo "fotoUsuario"
        $nomeFoto = $user->fotoUsuario = $request->file('fotoUsuario')->getClientOriginalName();

        // Salvando a imagem no diretório público "users"
        $request->file('fotoUsuario')->storeAs('public/users/', $nomeFoto);

        // Salvando todos os dados requisitados
        $res = $user->save();

        // Se o salvamento ocorrer bem, ocorre este caminho
        if($res){

            $conta = $user;
            
            return view('minhaconta', ['conta' => $conta]);

        }
        // Se o salvamento não ocorrer, retornará a página anterior com uma mensagem de falha
        else{
            return redirect('/#popup-CA-template-bg')->with('Falha', 'A conta não foi criada, tente novamente!');
        }
        
    }

    public function Login(Request $request){

        $request->validate([

            'email_usuario' => 'required|email',
            'senha_usuario' => 'required'

        ]);

        $user = Usuario::where('email_usuario', '=', $request->email_usuario)->first();

        if($user){
            if(Hash::check($request->senha_usuario, $user->senha_usuario)){
                $request->session()->put('loginId', $user->id_usuario);
                $conta = $user;

                if($user->tipoUsuario == "Estudante"){

                    return view('minhaconta', ['conta' => $conta]);

                }
                else if($user->tipoUsuario == "Admin"){

                    return view('minhaContaADM', compact('conta'));

                }
                
            }else{
                return redirect('/#popup-log-template-bg')->with('Falha', 'Senha incorreta...');
            }
        }else{
            return redirect('/#popup-log-template-bg')->with('Falha', 'E-mail incorreto...');
        }

        if(Session::has('loginId')){

            $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

        }
        return view('minhaconta', compact('conta'));

    }

    public function VisualizarConta(Request $request){

        // return view('minhaconta', compact('conta'));

        

        $conta = array();
        if(Session::has('loginId')){

            $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

            if($conta->tipoUsuario == "Estudante"){

                return view('minhaconta', ['conta' => $conta]);

            }
            else if($conta->tipoUsuario == "Admin"){

                return view('minhaContaADM', compact('conta'));

            }

        }   

    }

    public function EditarConta(Request $req, $id_usuario){

        $usuario = Usuario::query()->findOrFail($id_usuario);

        $usuario->nome_usuario = $req->nome_usuario;
        $usuario->email_usuario = $req->email_usuario;
        $usuario->senha_usuario = Hash::make($req->senha_usuario);

        $usuario->save();

        $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

        return redirect('/minhaconta')->with('Sucesso', 'A conta foi editada com êxito!');

    }

    public function ExcluirConta(Request $req, $id_usuario){

        $usuario = Usuario::query()->findOrFail($id_usuario);

        $usuario->delete();

        return redirect('/');

    }

    public function Logout(){

        if(Session::has('loginId')){
            
            Session::pull('loginId');
            return redirect('/');
        }
        
    }
    
}
