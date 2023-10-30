<?php

namespace App\Http\Controllers;

use App\Models\PerguntasTestVoc;
use Illuminate\Http\Request;

class ControllerQuestionario extends Controller
{
    
    public function VisualizarQuestionario(Request $request){
        
        $quest_voc = PerguntasTestVoc::paginate(1);
        $total_perg = PerguntasTestVoc::count();


        return view ('Questionario', compact('quest_voc', 'total_perg'));

    }

    
    
}
