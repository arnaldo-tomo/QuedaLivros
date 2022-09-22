<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;

    //Criando um metodo que vai receber as colunas da migration do autor
    protected $fillable = ['autorNome','autorPerfil','autorDescricao','autorEmail'];

    protected $admins = ['autorPerfil', 'autorNome', 'autorEmail', 'autorDescricao'];

    public function livro()
    {
        return $this->hasManyThrough(livro::class, 'livro');
    }
}
