<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdUserToProductsTable extends Migration
{
    /**
     * เพิ่มคอลัมน์ `id_user` ลงในตาราง `products`.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');

            // หากต้องการเพิ่ม foreign key constraint ให้เชื่อมโยงกับ `user_webs` table
            $table->foreign('user_id')->references('id')->on('user_webs')->onDelete('cascade');
        });
    }

    /**
     * ยกเลิกการเพิ่มคอลัมน์ `id_user` ออกจากตาราง `products`.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
