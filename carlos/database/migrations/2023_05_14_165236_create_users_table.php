<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('name');
            $table->string('password');
        });

        DB::table('users')->insert(
            [
                ['name' => 'Aron', 'password' => '1234'],
                ['name' => 'Juan', 'password' => '1234'],
                ['name' => 'Mita', 'password' => '1234'],
                ['name' => 'Leo', 'password' => '1234'],
                ['name' => 'Ana', 'password' => '1234'],
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
        Schema::dropIfExists('users');
    }
}
