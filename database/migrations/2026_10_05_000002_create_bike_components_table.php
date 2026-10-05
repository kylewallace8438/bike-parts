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
        Schema::create('bike_components', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bike_id');
            $table->string('component_key');
            $table->string('custom_name');
            $table->string('specifications')->nullable();
            $table->unsignedInteger('installed_odo');
            $table->date('installed_date');
            $table->unsignedInteger('interval_km')->nullable();
            $table->unsignedInteger('interval_days')->nullable();
            $table->unsignedTinyInteger('warranty_months')->default(0);
            $table->date('warranty_expiry_date')->nullable();
            $table->enum('status', ['good', 'warning', 'critical', 'expired'])->default('good');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('bike_id');
            $table->index(['bike_id', 'component_key']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bike_components');
    }
};
