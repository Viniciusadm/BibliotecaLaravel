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
            $table->string('titulo', 100);
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('editora_id');
            $table->text('sinopse');
            $table->text('genero');
            $table->boolean('disponivel');
            $table->integer('ano');
            $table->integer('paginas');
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autores');
            $table->foreign('editora_id')->references('id')->on('editoras');
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
