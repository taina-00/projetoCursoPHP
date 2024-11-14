<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function criar(Request $request) {
        $aluno = new User;
        $aluno->name = $request->name;
        $aluno->cpf = $request->cpf;
        $aluno->email = $request->email;
        $aluno->telefone = $request->telefone;

        $aluno->save();
        return redirect('/listar_alunos');
    }

    public function listar() {
        $alunos = Aluno::all();

        return view("alunos", ["alunos"=>$alunos]);
    }

    public function formCriarAluno() {
        return view("cadastro_aluno");
    }

    public function deletar($id) {
        $aluno = new Aluno;
        $aluno->find($id)->delete();
        return redirect('/listar_alunos');
    }

}

