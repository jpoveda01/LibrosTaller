<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();

            $table->integer('editorial_id')->unsigned();
            $table->foreign('editorial_id')->references('id')->on('editoriales');
            $table->integer("genero_id")->unsigned();
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->integer("autor_id")->unsigned();
            $table->foreign('autor_id')->references('id')->on('autores');
            $table->date('fecha_publicacion');
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
        Schema::dropIfExists('libros');
    }
}
