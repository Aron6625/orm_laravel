<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FuncionUi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcion_ui', function (Blueprint $table) {
            $table->id();
            $table->integer('funcion_id')->references('id')->on('funcions');
            $table->integer('ui_id')->references('id')->on('u_i_s');
        });
        DB::table('funcion_ui')->insert(
            [
                ['funcion_id' => 1, 'ui_id' => 1],
                ['funcion_id' => 2, 'ui_id' => 2],
                ['funcion_id' => 3, 'ui_id' => 3],
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
