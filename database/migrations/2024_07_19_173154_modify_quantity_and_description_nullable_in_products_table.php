<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyQuantityAndDescriptionNullableInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('quantity')->nullable()->change(); // อัปเดตคอลัมน์ quantity ให้สามารถรับค่า null ได้
            $table->text('description')->nullable()->change(); // อัปเดตคอลัมน์ description ให้สามารถรับค่า null ได้
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('quantity')->nullable(false)->change(); // ยกเลิกการเปลี่ยนแปลงถ้าจำเป็น
            $table->text('description')->nullable(false)->change(); // ยกเลิกการเปลี่ยนแปลงถ้าจำเป็น
        });
    }
}

