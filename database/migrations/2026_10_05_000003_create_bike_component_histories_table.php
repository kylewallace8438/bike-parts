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
        Schema::create('bike_component_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bike_id');
            $table->string('component_key');
            $table->string('old_part_name')->nullable();
            $table->string('new_part_name');
            $table->unsignedInteger('replaced_odo');
            $table->date('replaced_date');
            $table->decimal('cost', 12, 2)->unsigned()->default(0);
            $table->string('garage_name')->nullable();
            $table->string('receipt_image_path')->nullable();
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
        Schema::dropIfExists('bike_component_histories');
    }
};
