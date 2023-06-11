<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id('bitacora');
            $table->JSON('datonuevo');           
            $table->JSON('dataviejo');           
            $table->enum('accion',['DELETE','UPDATE','INSERT','SELECT']);               
            $table->dateTime('fechaaccion');          
            $table->JSON('usern');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacoras');
    }
}
