<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('file_path_1')->nullable();
            $table->string('file_path_2')->nullable();
            $table->string('file_path_3')->nullable();
            $table->string('file_path_4')->nullable();
            $table->string('file_path_5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['file_path_1', 'file_path_2', 'file_path_3', 'file_path_4', 'file_path_5']);
        });
    }
};
