<?php

namespace pronap\Http\Controllers;

use Illuminate\Http\Request;
use pronap\Aluno;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alunos = \pronap\Aluno::get();

        return view('home',compact('alunos'));
    }

    public function delete($idAluno){

        $alunos = Aluno::find($idAluno);
        $alunos->delete();

        return redirect('admin/home');

    }


}
