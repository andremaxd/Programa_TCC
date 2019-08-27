<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('cliente_id');
            $table->text('dormitorios');
            $table->text('residencial');
            $table->text('ap');
            $table->string('entrada');
            $table->string('saida');
            $table->string('diarias');
            $table->string('valor_diaria');
            $table->string('valor_limpeza');
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
        Schema::dropIfExists('reserva');
    }
}
