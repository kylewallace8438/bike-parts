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
        Schema::table('bike_parts', function (Blueprint $table) {
            $table->string('number')->change();
            $table->renameColumn('categories_id', 'category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bike_parts', function (Blueprint $table) {
            $table->integer('number')->change();
            $table->renameColumn('category_id', 'categories_id');
        });
    }
};
