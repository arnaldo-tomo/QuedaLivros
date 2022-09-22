<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

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
        if (!Auth::check()) {
            return view('auth.login')->with('nado', 'Voce nao esta Autenticado');
        }

        return view('detalhes', ['dado' => $dado, 'semelhante' => $semelhante]);
    }
    public function lerdetalhes($dado)
    {
        $dado = livro::findOrfail($dado);
        $categoria = $dado->livroCategoria;
        $semelhante = DB::table('livros')->where('livroCategoria', $categoria)->get();
        return view('detalhes', ['dado' => $dado, 'semelhante' => $semelhante]);
    }

    public function categorias()
    {
        $autor = autor::OrderBy('created_at', 'desc')->get();
        $livro = livro::OrderBy('created_at', 'desc')->get();
        return view(
            'Categoria',
            ['autor' => $autor, 'livro' => $livro]
        );
    }

    public function favoritar($id)
    {
        $livro = livro::find($id);
        $livro->favorito = true;
        $livro->save();
        return redirect()->back();
    }

    public function verperfil()
    {
        return view('MeuPerfil');
    }
    public function EditarPerfil()
    {
        return view('EditarPerfil');
    }
    public function Privacidade()
    {
        return view('privacidades');
    }
    public function Configurar()
    {
        return view('configurarConta');
    }
}
