<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = "alunos";
    //app/Models/
    protected $fillable = [
        "nome",
        "telefone",
        "cpf",
    ];
}
