<?php

namespace App\Http\Controllers;

use App\Models\Questoes;
use App\Models\ResultSimu;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use LDAP\Result;

class ControllerAreaAluno extends Controller
{
    public function VisualizarGraficos()
    {

        $acertos = array();
        if (Session::has('loginId')) {
            $result_Semanal = ResultSimu::select('data_conclusao as data_rend', 'qntd_acertos as qntd_rend')
                ->take(7)
                ->orderBy('data_conclusao', 'asc')
                ->where('id_usuario', '=', Session::get('loginId'))
                ->get();

            $dados_Semanal = [['Data', '']];

            if ($result_Semanal->count() > 0) {
                foreach ($result_Semanal as $rendimento) {
                    $dados_Semanal[] = ['Dia ' . date('d', strtotime($rendimento->data_rend)), (float) $rendimento->qntd_rend];
                }
            }

            $result_Mensal = ResultSimu::select('data_conclusao as data_rend', 'qntd_acertos as qntd_rend')
                ->whereRaw('DAY(data_conclusao) % 2 != 0')
                ->take(30)
                ->orderBy('data_conclusao', 'asc')
                ->where('id_usuario', '=', Session::get('loginId'))
                ->get();

            $dados_Mensal = [['Data', '']];

            if ($result_Mensal->count() > 0) {
                foreach ($result_Mensal as $rendimento) {
                    $dados_Mensal[] = ['Dia ' . date('d', strtotime($rendimento->data_rend)), (float) $rendimento->qntd_rend];
                }
            }

            $simu_totais = ResultSimu::where('id_usuario', '=', Session::get('loginId'))->count();

            // $taxa_acertos = ResultSimu::select('qntd_acertos')
            // ->where('id_usuario', '=', Session::get('loginId')) / Questoes::count() * 100;

            $taxa_acertos = 0; // Valor padrão

            $alter_certas = ResultSimu::select('qntd_acertos')
                ->where('id_usuario', '=', Session::get('loginId'))
                ->first();

            if ($alter_certas) {
                $qntd_acertos = $alter_certas->qntd_acertos;
                $quest_totais = Questoes::count();
                
                $taxa_acertos = ($qntd_acertos / $quest_totais) * 100;
            }

        }

        $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

        return view('AreaAluno', compact('result_Semanal', 'dados_Semanal', 'result_Mensal', 'dados_Mensal', 'simu_totais', 'conta', 'taxa_acertos'));
    }
}