<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    use HasFactory;

    //Instanciando todas as colunas da migrations 
    protected $fillable=['livroNome','livroImagen','livroCategoria','livroAutor','livroPdf','livroEdicao','livroDescricao','tipo'];

    protected $admins = ['livrofoto', 'livrocatrgoria', 'livroautor', 'livroeditora', 'edicao', 'descricao'];

    public function autor()
    {
        return $this->hasOne(autor::class, 'livro_id');
    }
}
