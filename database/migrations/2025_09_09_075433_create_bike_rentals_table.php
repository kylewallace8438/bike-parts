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
        Schema::create('bike_rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_bike_id')->constrained('rental_bikes')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->datetime('start_time'); // Thời gian bắt đầu thuê
            $table->datetime('end_time'); // Thời gian kết thúc thuê (dự kiến)
            $table->datetime('actual_end_time')->nullable(); // Thời gian trả xe thực tế
            $table->string('rental_type'); // hourly, daily, weekly, monthly
            $table->decimal('base_price', 10, 2); // Giá cơ bản
            $table->decimal('additional_fees', 10, 2)->default(0); // Phí phát sinh
            $table->decimal('discount', 10, 2)->default(0); // Giảm giá
            $table->decimal('total_price', 10, 2); // Tổng tiền
            $table->string('status')->default('pending'); // pending, confirmed, active, completed, cancelled
            $table->string('payment_status')->default('unpaid'); // unpaid, paid, refunded, partially_refunded
            $table->string('payment_method')->nullable(); // cash, card, online, wallet
            $table->string('pickup_location')->nullable(); // Địa điểm nhận xe
            $table->string('return_location')->nullable(); // Địa điểm trả xe
            $table->text('notes')->nullable(); // Ghi chú
            $table->text('damage_report')->nullable(); // Báo cáo hư hỏng (nếu có)
            $table->decimal('damage_fee', 8, 2)->default(0); // Phí sửa chữa hư hỏng
            $table->integer('rating')->nullable(); // Đánh giá (1-5 sao)
            $table->text('review')->nullable(); // Nhận xét của khách hàng
            $table->decimal('distance_traveled', 10, 2)->nullable(); // Quãng đường đã đi
            $table->json('route_data')->nullable(); // Dữ liệu lộ trình (GPS tracking)
            $table->datetime('cancelled_at')->nullable(); // Thời gian hủy
            $table->string('cancelled_by')->nullable(); // user, admin, system
            $table->text('cancellation_reason')->nullable(); // Lý do hủy
            $table->timestamps();

            // Indexes
            $table->index(['rental_bike_id', 'start_time']);
            $table->index(['user_id', 'status']);
            $table->index('status');
            $table->index('payment_status');
            $table->index(['start_time', 'end_time']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bike_rentals');
    }
};
