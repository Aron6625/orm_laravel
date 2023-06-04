<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_rol');
        });

        DB::table('rols')->insert(
           [
                ['nombre_rol' => 'Estudiante'], // 1
                ['nombre_rol' => 'Profesor'], // 2
                ['nombre_rol' => 'Director'], // 3
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
        Schema::dropIfExists('rols');
    }
}
