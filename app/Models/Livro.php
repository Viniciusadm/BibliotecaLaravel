<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'autor_id', 'editora_id', 'sinopse', 'genero', 'disponivel', 'ano', 'paginas'];
}
