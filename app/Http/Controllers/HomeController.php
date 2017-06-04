<?php

namespace Sigla\Http\Controllers;

use Illuminate\Http\Request;
use Sigla\Aluno;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alunos = \Sigla\Aluno::get();

        return view('home',compact('alunos'));
    }

    public function delete($idAluno){

        $alunos = Aluno::find($idAluno);
        $alunos->delete();

        return redirect('admin/home');

    }


}
