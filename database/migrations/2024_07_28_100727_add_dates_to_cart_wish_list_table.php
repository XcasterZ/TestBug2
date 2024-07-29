<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDatesToCartWishListTable extends Migration
{
    public function up()
    {
        Schema::table('cart_wish_list', function (Blueprint $table) {
            $table->json('add_cart_date')->nullable();
            $table->json('add_wish_list_date')->nullable();
        });
    }

    public function down()
    {
        Schema::table('cart_wish_list', function (Blueprint $table) {
            $table->dropColumn('add_cart_date');
            $table->dropColumn('add_wish_list_date');
        });
    }
}
