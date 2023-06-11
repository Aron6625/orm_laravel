<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_rols', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_fin');
            $table->date('fecha_ini');
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('rol_id')->references('id')->on('rols');
        });

        DB::table('user_rols')->insert(
            [
                [
                    'fecha_fin' => '2022-05-21',
                    'fecha_ini' => '2022-05-21',
                    'user_id' => 2,
                    'rol_id' => 1,
                ],
                [
                    'fecha_fin' => '2022-05-21',
                    'fecha_ini' => '2022-05-21',
                    'user_id' => 1,
                    'rol_id' => 2,
                ],
                [
                    'fecha_fin' => '2022-05-21',
                    'fecha_ini' => '2022-05-21',
                    'user_id' => 3,
                    'rol_id' => 1,
                ],
                [
                    'fecha_fin' => '2022-05-21',
                    'fecha_ini' => '2022-05-21',
                    'user_id' => 4,
                    'rol_id' => 3,
                ],
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
        Schema::dropIfExists('user_rols');
    }
}
