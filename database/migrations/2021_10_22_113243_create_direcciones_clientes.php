<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones_clientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_id'); 
            $table->string('calle');
            $table->bigInteger('num_ext');   
            $table->bigInteger('num_int');
            $table->string('colonia');
            $table->string('estado');
            $table->string('pais');
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
        Schema::dropIfExists('direcciones_clientes');
    }
}
