<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class Aluno extends Model
{
    use HasFactory;

    public function aluno()
    {
        return $this->hasOne(Aluno::class, 'id', 'aluno_id');
    }

    public function items()
    {
        // aqui estamos falando que um pedido tem muitos produtos e ai ele usa a tabela intermediaria
        return $this->belongsToMany(Curso::class, 'cursos_alunos')->withPivot('quantidade', 'created_at');
    }

}

