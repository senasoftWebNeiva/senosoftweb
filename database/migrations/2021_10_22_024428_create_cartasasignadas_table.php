<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartasasignadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartasasignadas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jugador_id');
            $table->unsignedBigInteger('carta_id');
            $table->timestamps();
            $table->foreign('jugador_id')->references('id')->on('jugadors');
            $table->foreign('carta_id')->references('id')->on('cartas');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartasasignadas');
    }
}
