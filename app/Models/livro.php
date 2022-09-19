<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    use HasFactory;
    protected $admins = ['livrofoto', 'livrocatrgoria', 'livroautor', 'livroeditora', 'edicao', 'descricao'];

    public function autor()
    {
        return $this->hasOne(autor::class, 'livro_id');
    }
}
