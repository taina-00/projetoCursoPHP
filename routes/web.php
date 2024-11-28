<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Cursos_AlunosController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_aluno', [AlunoController::class, "formCriarAluno"]);

Route::get('/listar_alunos', [AlunoController::class, 'listar']);

Route::post('/criar_aluno', [AlunoController::class, 'criar']);

Route::delete("/deletar_aluno/{id}", [AlunoController::class, 'deletar']);


Route::get('/cadastro_curso', [CursoController::class, "formCriarCurso"]);

Route::post('/criar_curso', [CursoController::class, 'criar']);

Route::get('/listar_cursos', [CursoController::class, 'listar']);

Route::delete("/deletar_curso/{id}", [CursoController::class, 'deletar']);

// App
Route::get('/', [AppController::class, 'inicial']);


Route::get('/listar_cursos_alunos', [Cursos_AlunosController::class, 'formCadastrarCursos']);

Route::post('/cadastrar_curso', [Cursos_AlunosController::class, 'cadastrar']);



Route::get('/listar_cursos', [CursoController::class, 'listar']);
