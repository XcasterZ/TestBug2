<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('user_webs', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('username');
            $table->string('last_name')->nullable()->after('first_name');
            $table->text('profile_detail')->nullable()->after('password');
            $table->string('facebook')->nullable()->after('profile_detail');
            $table->string('instagram')->nullable()->after('facebook');
            $table->string('line')->nullable()->after('instagram');
        });
    }

    public function down()
    {
        Schema::table('user_webs', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'profile_detail', 'facebook', 'instagram', 'line']);
        });
    }
};
