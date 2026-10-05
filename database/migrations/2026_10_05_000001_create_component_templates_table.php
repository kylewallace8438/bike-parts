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
        Schema::create('component_templates', function (Blueprint $table) {
            $table->id();
            $table->string('bike_type');
            $table->string('component_key');
            $table->string('name_vi');
            $table->unsignedInteger('default_interval_km')->nullable();
            $table->unsignedInteger('default_interval_days')->nullable();
            $table->unsignedTinyInteger('warning_threshold_pct')->default(85);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->unique(['bike_type', 'component_key']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('component_templates');
    }
};
