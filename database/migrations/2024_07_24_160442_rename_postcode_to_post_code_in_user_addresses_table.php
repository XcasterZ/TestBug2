<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenamePostcodeToPostCodeInUserAddressesTable extends Migration
{
    public function up()
    {
        Schema::table('user_addresses', function (Blueprint $table) {
            $table->renameColumn('postcode', 'post_code');
        });
    }

    public function down()
    {
        Schema::table('user_addresses', function (Blueprint $table) {
            $table->renameColumn('post_code', 'postcode');
        });
    }
}

