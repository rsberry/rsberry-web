<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username', 16)->unique();
            $table->string('password');
            $table->integer('x')->default(3200);
            $table->integer('y')->default(3200);
            $table->tinyInteger('banned')->default(1);
            $table->tinyInteger('height')->default(0);
            $table->tinyInteger('rights')->default(0);
            $table->tinyInteger('member')->default(0);
            $table->string('last_connection')->nullable()->default(null);
            $table->string('last_login')->nullable()->default(null);
            $table->integer('energy')->default(100);
            $table->string('game_time')->default(0);
            $table->string('game_count')->default(0);
            $table->string('look_0')->default(0);
            $table->string('look_1')->default(0);
            $table->string('look_2')->default(0);
            $table->string('look_3')->default(0);
            $table->string('look_4')->default(0);
            $table->string('look_5')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
