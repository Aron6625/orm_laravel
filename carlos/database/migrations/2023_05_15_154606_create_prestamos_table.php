<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_devolucion');
            $table->date('fecha_prestamo');
            $table->integer('computer_id'); 
            $table->integer('profesor_id');
            $table->integer('estudiante_id');
            
            $table->foreign('computer_id')
            ->references('id')
            ->on('computers');
            $table->foreign('profesor_id')
            ->references('id')
            ->on('users');
             $table->foreign('estudiante_id')
            ->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
