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
            $table->id();
            $table->string('file_path');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('user_type');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('subject');
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('image')->default('../rich.png');
            
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
