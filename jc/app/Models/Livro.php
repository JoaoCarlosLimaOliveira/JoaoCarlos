<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_do_usuario',
        'autor',
        'titulo',
        'subtitulo',
        'edicao',
        'editora',
        'ano_de_publicacao',
    ];

}
