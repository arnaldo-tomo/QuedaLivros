<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('livroNome');
            $table->string('livroImagen');
            $table->string('livroCategoria');
            $table->string('livroAutor');
            $table->string('livroPdf');
            $table->string('livroEdicao')->nullable();
            $table->string('livroDescricao', '1000');
            $table->String('tipo');
            $table->boolean('favorito')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
