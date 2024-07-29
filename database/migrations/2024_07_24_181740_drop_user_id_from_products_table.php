<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // ลบ foreign key constraint
            $table->dropColumn('user_id'); // ลบคอลัมน์
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
            $table->unsignedBigInteger('user_id')->nullable(); // เพิ่มคอลัมน์กลับเข้าไป
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); // เพิ่ม foreign key constraint กลับเข้าไป
        });
    }
};
