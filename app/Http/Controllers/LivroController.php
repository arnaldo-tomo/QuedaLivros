<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LivroController extends Controller
{
    public function home()
    {
        $autor = autor::OrderBy('created_at', 'desc')->get();
        $livro = livro::OrderBy('created_at', 'desc')->get();
        return view('welcome', ['autor' => $autor, 'livro' => $livro]);
    }

    public function ler($dado)
    {
        $dado = livro::findOrfail($dado);
        $categoria = $dado->livroCategoria;
        $semelhante = DB::table('livros')->where('livroCategoria', $categoria)->get();
        return view('detalhes', ['dado' => $dado, 'semelhante' => $semelhante]);
    }
    public function lerdetalhes($dado)
    {
        $dado = livro::findOrfail($dado);
        $categoria = $dado->livroCategoria;
        $semelhante = DB::table('livros')->where('livroCategoria', $categoria)->get();
        return view('detalhes', ['dado' => $dado, 'semelhante' => $semelhante]);
    }
}
