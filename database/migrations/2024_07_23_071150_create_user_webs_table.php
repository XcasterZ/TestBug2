<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWebsTable extends Migration
{
    public function up()
    {
        Schema::create('user_webs', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_webs');
    }
}
