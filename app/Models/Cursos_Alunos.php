<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;
use App\Models\Curso;
class Cursos_Alunos extends Model
{
    use HasFactory;
    protected $table = "cursos_alunos";
}
