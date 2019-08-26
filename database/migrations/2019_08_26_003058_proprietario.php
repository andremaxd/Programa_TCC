<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proprietario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->text('nome');
            $table->string('cpf');
            $table->text('endereco');
            $table->string('telefone');
            $table->text('email');
            $table->string('sexo');

            $table->text('banco');
            $table->string('agencia');
            $table->text('conta');
            $table->string('tipo_conta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proprietario');
    }
}
