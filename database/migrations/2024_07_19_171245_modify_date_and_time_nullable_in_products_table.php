<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDateAndTimeNullableInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->date('date')->nullable()->change(); // อัปเดตคอลัมน์ date ให้สามารถรับค่า null ได้
            $table->time('time')->nullable()->change(); // อัปเดตคอลัมน์ time ให้สามารถรับค่า null ได้
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
            $table->date('date')->nullable(false)->change(); // ยกเลิกการเปลี่ยนแปลงถ้าจำเป็น
            $table->time('time')->nullable(false)->change(); // ยกเลิกการเปลี่ยนแปลงถ้าจำเป็น
        });
    }
}
