<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ficha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FichaStatus');
     


            $table->unsignedInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('Categoria');


            $table->unsignedInteger('escola_id');
            $table->foreign('escola_id')->references('id')->on('Escola');


            $table->unsignedInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('Aluno');


            // $table->unsignedInteger('produto_id');
            // $table->foreign('produto_id')->references('id')->on('produtos');


            // $table->foreignId('FichaCategoriaID')->constrained('tb_categoria')->onDelete('cascade');
            // $table->foreignId('FichaEscolaID')->constrained('tb_escola')->onDelete('cascade');
            // $table->foreignId('FichaAlunoID')->constrained('tb_aluno')->onDelete('cascade');


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
      // Schema::dropIfExists('tb_ficha');

    }
};
