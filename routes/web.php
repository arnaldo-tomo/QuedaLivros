<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LivroController;
use App\Models\livro;
use Illuminate\Support\Facades\Route;

//ADMIN ROUTER::
Route::post('autenticacao', [AdminController::class, 'entrar'])->name('autenticacao');

//tela de login
Route::get('admin', [AdminController::class, 'telalogin'])->name('admin');
//Dashboard
Route::get('admin', [AdminController::class, 'AdminDashboard'])->name('AdminDashboard');

//Autor
Route::get('autor', [AdminController::class, 'autor'])->name('autor');
Route::get('formulario', [AdminController::class, 'crirautor'])->name('crirautor');
Route::post('formulario', [AdminController::class, 'salvarautor'])->name('salvarautor');
Route::get('delete/{id}', [AdminController::class, 'deleteautor'])->name('deleteautor');
//categoria
Route::get('categoria', [AdminController::class, 'categoria'])->name('categoria');
//livros
Route::get('livro', [AdminController::class, 'livros'])->name('livro');
Route::get('criar', [AdminController::class, 'criarlivro'])->name('criarlivro');
Route::post('criar', [AdminController::class, 'salvarlivro'])->name('salvarlivro');
//perfil
Route::get('perfil', [AdminController::class, 'perfil'])->name('perfil');
//perfileditar
Route::get('perfileditar', [AdminController::class, 'perfileditar'])->name('perfileditar');
//usuariover
Route::get('usuariover', [AdminController::class, 'usuariover'])->name('usuariover');
Route::get('save', [AdminController::class, 'save'])->name('save');
//logout
Route::get('logout', [AdminController::class, 'terminar'])->name('terminar');
Route::get('sair', [AdminController::class, 'sair'])->name('sair');


Route::get('/', [LivroController::class, 'home'])->name('home');
Route::get('dashboard/', [LivroController::class, 'home'])->name('home');
Route::get('ler/{dado}', [LivroController::class, 'ler'])->name('ler');
Route::get('lerdetalhes/{dado}', [LivroController::class, 'lerdetalhes'])->name('lerdetalhes');
Route::get('categoria', [LivroController::class, 'categorias'])->name('categoria');
Route::get('favoritar/{id}', [LivroController::class, 'favoritar'])->name('favoritar');


Route::get('Perfil', [LivroController::class, 'verperfil'])->name('verperfil');
Route::get('Configurar', [LivroController::class, 'Configurar'])->name('Configurar');
Route::get('EditarPerfil', [LivroController::class, 'EditarPerfil'])->name('EditarPerfil');
Route::get('Privacidade', [LivroController::class, 'Privacidade'])->name('Privacidade');
Route::get('livros', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');



require __DIR__ . '/auth.php';
