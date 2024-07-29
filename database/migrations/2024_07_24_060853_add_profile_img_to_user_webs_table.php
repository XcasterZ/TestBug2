<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileImgToUserWebsTable extends Migration
{
    public function up()
    {
        Schema::table('user_webs', function (Blueprint $table) {
            $table->string('profile_img')->default('Profile Pic/default.png');
        });
    }

    public function down()
    {
        Schema::table('user_webs', function (Blueprint $table) {
            $table->dropColumn('profile_img');
        });
    }
}

