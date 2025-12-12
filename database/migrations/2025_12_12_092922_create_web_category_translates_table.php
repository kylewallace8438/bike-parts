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
        Schema::create('web_category_translates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('web_category_id');
            $table->string('lang');
            $table->string('name');
            $table->foreign('web_category_id')->references('id')->on('web_categories')->onDelete('cascade');
            $table->index(['web_category_id', 'lang']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_category_translates');
    }
};
