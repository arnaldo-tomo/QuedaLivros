<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\autor;
use App\Models\livro;
// use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function telalogin()
    {
        return view('admin.index');
    }
    //admin autenticacao
    public function entrar(Request $request)
    {

        // validadacao de campos
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);
        // // verificar se o susuario existe
        $query_ru = admin::where('email', $request->email)->first();

        //    Verificar  se Existe o susuario
        if (isset($query_ru) == 0) {
            return redirect('admin')->with('status', 'Usuário não existe ');
        }

        //    Verificar se a senha corresponde ao que na DB
        if (!hash::check($request->senha, $query_ru->senha)) {
            return redirect('admin')->with('status', 'Palavra-passe Incorreta.');
        }
        Session::put('logado', 'sim');
        Session::put('usuario', $query_ru->nome);
        return redirect()->route('AdminDashboard')->with('status', 'Logado com sucessos');
    }

    public function AdminDashboard()
    {
        if (!session('usuario')) {
            return view('admin.index');
        }
        return view('admin.dashboard');
    }

    public function autor()
    {
        $autor = autor::all();
        if (!session('usuario')) {
            return view('admin.index');
        }
        return view('admin.autor', ['autor' => $autor]);
    }

    public function livros()
    {
        $livro =  livro::all();
        if (!session('usuario')) {
            return view('admin.index');
        }
        return view('admin.livros', ['livro' => $livro]);
    }
    public function criarlivro()
    {
        $autor =  autor::all();
        return view('admin.criarnovolivro', ['autor' => $autor]);
    }
    public function salvarlivro(Request $request)
    {
        $livro = new livro();
        $livro->LivroNome =  $request->LivroNome;
        $livro->livroImagen =  $request->livroImagen->store('livro/imgane');;
        $livro->livroCategoria = $request->livroCategoria;
        $livro->livroAutor = $request->livroAutor;
        $livro->livroPdf = $request->livroPdf->store('livro/pdf');;
        $livro->livroEdicao = $request->livroEdicao;
        $livro->livroDescricao = $request->livroDescricao;
        $livro->tipo = $request->tipo;

        $livro->save();
        return redirect()->route('livro')->with('status', 'criarlivro Registado');
    }

    public function categoria()
    {
        if (!session('usuario')) {
            return view('admin.index');
        }
        return view('admin.categoria');
    }

    public function perfil()
    {
        if (!session('usuario')) {
            return view('admin.index');
        }
        return view('admin.perfil');
    }

    public function perfileditar()
    {
        if (!session('usuario')) {
            return view('admin.index');
        }
        return view('admin.perfileditar');
    }


    public function usuariover()
    {
        return view('admin.usuariover');
    }

    public function crirautor()
    {
        return view('admin.autorFormulario');
    }
    public function salvarautor(Request $request)
    {

        // validadacao de campos
        $request->validate([
            'autorNome' => 'required',
            'autorEmail' => 'required|email',
            'autorDescricao' => 'required',
            'autorPerfil' => 'required|image'
            // 'autorPerfil' => 'required|mimes:pdf,doc,docx'
        ]);

        $autor = new autor;
        $autor->autorNome = $request->autorNome;
        $autor->autorEmail = $request->autorEmail;
        $autor->autorDescricao = $request->autorDescricao;
        $autor->autorPerfil = $request->autorPerfil->store('perfil/autores');

        $autor->save();
        return redirect()->route('autor')->with('status', 'Autor Registado');
    }

    public function deleteautor($id)
    {
        $autor = autor::find($id);
        $local = "perfil/autores/" . $autor->autorPerfil;

        if (File::exists($local)) {
            File::delete($local);
        }
        $autor->delete();


        return redirect()->back();
    }



    public function logout()
    {
        Session::flush();
        Session()->flush();
        return redirect('admin')->with('status', 'terminado com sucessos');
    }

    public function save()
    {
        //para criar admin
        $usuario = new admin;
        $usuario->nome = "ADMIN QUEDA";
        $usuario->email = "admin@gmail.com";
        $usuario->senha = Hash::make('admin');
        $usuario->save();
        return "Craido Com Exito! ";
    }
}
