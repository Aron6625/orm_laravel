<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class FuncionRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcion_rol', function (Blueprint $table) {
            $table->id();
            $table->integer('rol_id')->references('id')->on('rols');
            $table->integer('funcion_id')->references('id')->on('funcions');
        });

        DB::table('funcion_rol')->insert(
            [
                ['rol_id' => 2, 'funcion_id' => 1],
                ['rol_id' => 1, 'funcion_id' => 3],
                ['rol_id' => 1, 'funcion_id' => 1],
                ['rol_id' => 1, 'funcion_id' => 2],
                ['rol_id' => 1, 'funcion_id' => 3],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
