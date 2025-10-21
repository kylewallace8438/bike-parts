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
        Schema::create('bike_availability', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_bike_id')->constrained('rental_bikes')->onDelete('cascade');
            $table->date('date'); // Ngày
            $table->time('start_time')->default('00:00:00'); // Giờ bắt đầu có sẵn
            $table->time('end_time')->default('23:59:59'); // Giờ kết thúc có sẵn
            $table->string('status')->default('available'); // available, unavailable, maintenance, reserved
            $table->string('reason')->nullable(); // Lý do không có sẵn (maintenance, reserved, etc.)
            $table->decimal('special_price', 8, 2)->nullable(); // Giá đặc biệt cho ngày này
            $table->boolean('is_peak_time')->default(false); // Có phải giờ cao điểm không
            $table->text('notes')->nullable(); // Ghi chú
            $table->timestamps();

            // Unique constraint để tránh duplicate availability cho cùng một xe trong cùng ngày
            $table->unique(['rental_bike_id', 'date']);

            // Indexes
            $table->index(['rental_bike_id', 'date']);
            $table->index(['date', 'status']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bike_availability');
    }
};
