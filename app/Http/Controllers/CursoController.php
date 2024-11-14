<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function criar(Request $request) {
        $curso = new Curso;
        $curso->nome = $request->nome;
        $curso->descricao = $request->descricao;
        $curso->duracao = $request->duracao;
       

        $curso->save();
        return redirect('/listar_cursos');
    }

    public function formCriarCurso() {
        return view("cadastro_curso");
    }

    public function listar() {
        $cursos = Curso::all();

        return view("cursos", ["cursos"=>$cursos]);
    }
}
