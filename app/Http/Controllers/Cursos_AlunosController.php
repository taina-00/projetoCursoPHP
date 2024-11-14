<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Aluno;
use App\Models\Cursos_Alunos;
class Cursos_AlunosController extends Controller
{
    public function formCadastrarCursos_Alunos() {
        $aluno = Aluno::all();
        $cursos = Curso::all();
        return view("cadastro_cursos_alunos", ["alunos"=>$alunos, "cursos"=>$cursos]);
    }

    
    public function cadastrar(Request $request)
    {
      $items = $request->input('items');
      $aluno = $request->input('aluno');
      $cursos_alunos = new Cursos_alunos;
      $cursos_alunos->sluno_id = $aluno;
      $cursos_alunos->save();
      foreach ($items as $itemId => $quantity) {
          if ($quantity > 0) {
              $cursos_alunos = new PedidoProduto;
              $cursos_alunos->cursos_alunos_id = $pedido->id;
              $cursos_alunos->_id = $itemId;
              $cursos_alunos->quantidade = $quantity;
              $cursos_alunos->save();
          }
      }

      return redirect('/listar_alunos');
   }

   public function listar() {
    $cursos_alunos = Cursos_alunos::all();

    return view('listar_cursos_alunos', ["cursos_alunos" => $cursos_alunos]); 

   }
}
