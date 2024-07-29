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
        Schema::table('list_items', function (Blueprint $table) {
            $table->integer('quantity');
            $table->date('date');
            $table->time('time');
            $table->text('description');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('list_items', function (Blueprint $table) {
            $table->dropColumn('quantity');
            $table->dropColumn('date');
            $table->dropColumn('time');
            $table->dropColumn('description');
        });
    }
};
