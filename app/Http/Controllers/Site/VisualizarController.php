<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class VisualizarController extends Controller
{
    public function ver($id){
        $curso = Curso::find($id);
        
        return view('curso',compact('curso'));
    }
}
