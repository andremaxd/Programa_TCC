<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apartamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('dormitorios');
            $table->string('residencial');
            $table->integer('ap');
            $table->string('bloco');
            $table->integer('id_proprietario');
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
        Schema::dropIfExists('apartamento');
    }
}
