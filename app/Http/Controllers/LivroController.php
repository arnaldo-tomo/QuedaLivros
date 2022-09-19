<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function home()
    {
        $autor = autor::OrderBy('created_at', 'desc')->get();
        $livro = livro::OrderBy('created_at', 'desc')->get();
        return view('welcome', ['autor' => $autor, 'livro' => $livro]);
    }
}
