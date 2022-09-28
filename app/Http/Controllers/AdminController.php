<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\User;
use App\Models\autor;
use App\Models\livro;
// use Facade\FlareClient\Stacktrace\File;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Request;

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
        Request::validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);
        // // verificar se o susuario existe
        $query_ru = admin::where('email', Request::input('email'))->first();

        //    Verificar  se Existe o susuario
        if (isset($query_ru) == 0) {
            return redirect('admin')->with('status', 'Usuário não existe ');
        }

        //    Verificar se a senha corresponde ao que na DB
        if (!hash::check(Request::input('senha'), $query_ru->senha)) {
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
    public function salvarlivro()
    {
        $livro = new livro();

        $livro->livroNome =  Request::input('livroNome');
        $livro->livroCategoria =  Request::input('livroCategoria');
        $livro->livroAutor =  Request::input('livroAutor');
        $livro->livroEdicao =  Request::input('livroEdicao');
        $livro->livroDescricao =  Request::input('livroDescricao');
        $livro->tipo =  Request::input('tipo');

        if(Request::file('livroImagen')!=null)
        {
            //Codigo para mover a imagem para dentro da pasta
            $filename = Request::file('livroImagen')->getClientOriginalName();
            $link = "livro/imgane/".$filename;
            $livro->livroImagen = $link;
            $foto = Request::file('livroImagen');
            $foto->move('livro/imgane',$filename);
        }

        if(Request::file('livroPdf')!=null)
        {
            //Codigo para mover a imagem para dentro da pasta
            $filenamePdf = Request::file('livroPdf')->getClientOriginalName();
            $link = "livro/pdf/".$filename;
            $livro->livroPdf = $link;
            $pdf = Request::file('livroPdf');
            $pdf->move('livro/pdf',$filenamePdf);
        }

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
    public function salvarautor()
    {
        // validadacao de campos
        Request::validate([
            'autorNome' => 'required',
            'autorEmail' => 'required|email',
            'autorDescricao' => 'required',
            'autorPerfil' => 'required|image'
            // 'autorPerfil' => 'required|mimes:pdf,doc,docx'
        ]);

        $autor = new autor();
        $autor->autorNome = Request::input('autorNome');
        $autor->autorEmail = Request::input('autorEmail');
        $autor->autorDescricao = Request::input('autorDescricao');

        if(Request::file('autorPerfil')!=null)
        {
            $filename = Request::file('autorPerfil')->getClientOriginalName();
            $link = "perfil/autores/".$filename;
            $autor->autorPerfil = $link;
            $foto = Request::file('autorPerfil');
            $foto->move('perfil/autores',$filename);
        }

        $autor->save();

        return redirect()->route('autor')->with('status', 'Autor Registado');
    }

    public function deleteautor($id)
    {
        $autor = autor::find($id);
        $local = $autor->autorPerfil;

        if (File::exists($local)) {
            File::delete($local);
        }
        $autor->delete();

        return redirect()->back()->with('Sucess','O autor foi eliminado com sucesso.');
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
    public function actualizarAutor($id)
    {
        $autor=autor::find($id);

        $autor->autorNome=Request::input('autorNome');
        $autor->autorEmail=Request::input('autorEmail');
        $autor->autorDescricao=Request::input('autorDescricao');

        if(Request::file('autorPerfil')!=null)
        {
            $filename = Request::file('autorPerfil')->getClientOriginalName();
            $link = "perfil/autores/".$filename;
            $autor->autorPerfil = $link;
            $foto = Request::file('autorPerfil');
            $foto->move('perfil/autores',$filename);
        }

        $autor->update();

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
