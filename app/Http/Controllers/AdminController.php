<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\User;
use App\Models\autor;
use App\Models\livro;
// use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
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
        $usuarios=User::all();
        return view('admin.usuariover', compact('usuarios'));
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



    public function sair()
    {
        Session::flush();
        Session()->flush();

        return view('admin.index');
    }



    public function terminar()
    {
        $autor = autor::OrderBy('created_at', 'desc')->get();
        $livro = livro::OrderBy('created_at', 'desc')->get();
        // return view('welcome', ['autor' => $autor, 'livro' => $livro]);
        Session::flush();
        Session()->flush();
        return view(
            'welcome',
            ['autor' => $autor, 'livro' => $livro]
        );
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

    //Inicio do metodo que elimina o livro
    public function eliminarLivro($id)
    {
        $livro = livro::find($id);
        $localImagem = "perfil/livrosImgane/" . $livro->autorPerfil;
        $localPdf = "perfil/livrosPdf/" . $livro->autorPerfil;

        if (File::exists($localImagem) && File::exists($localPdf)) {
            File::delete($localImagem);
            File::delete($localPdf);
        }
        $livro->delete();
        
        return redirect()->route('livro')->with('Eliminado','O livro foi eliminado com sucesso.');
    }

    //Inicio do metodo que retorna a pagina de edicao dos autores 
    public function editarAutor($id)
    {
        $autor=autor::find($id);
        return view('admin.editarAutor',['autor'=>$autor]);
    }

    //Inicio do metodo para actualizar o autor
    public function actualizarAutor(Request $request,$id)
    {
        $autor=autor::find($id);

        $autor->autorNome=$request->autorNome;
        $autor->autorEmail=$request->autorEmail;
        $autor->autorDescricao=$request->autorDescricao;

        if($request->hasFile('autorPerfil'))
        {
            $filenameWithExt = $request->file('autorPerfil')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('autorPerfil')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('autorPerfil')->storeAs('perfil/autores', $fileNameToStore);
        }
        else
        {
            return redirect()->route('autor')->with('Error','Falha ao actualizar, imagem nao encontrada');
        }

        $autor->update($request->all());

        return redirect()->route('autor')->with('Actualizado','O autor foi actualizado com sucesso');
    }

    //Inicio do metodo para eliminar usuario 
    public function eliminarUsuario($id) 
    {
        $usuarios=User::find($id);
        $usuarios->delete();

        return redirect()->back()->with('Eliminado','O usuario foi eliminado com sucesso');
    }

}
