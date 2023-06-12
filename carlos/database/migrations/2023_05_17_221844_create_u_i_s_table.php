<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
        });

        DB::table('u_i_s')->insert(
            [
                    ['nombre' =>'prestamos'],
                    ['nombre' =>'computer'],
                    ['nombre' =>'vercomputadoras'],
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
        Schema::dropIfExists('u_i_s');
    }
}
