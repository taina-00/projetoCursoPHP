<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;

class Aluno extends Model
{
    use HasFactory;

    public function aluno()
    {
        return $this->hasOne(Aluno::class, 'id', 'aluno_id');
    }


}

