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
        Schema::create('rental_bikes', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên xe đạp
            $table->string('model'); // Model xe đạp
            $table->string('brand'); // Hãng xe đạp
            $table->text('description')->nullable(); // Mô tả chi tiết
            $table->string('color')->nullable(); // Màu sắc
            $table->string('size')->nullable(); // Kích thước (S, M, L, XL)
            $table->string('type'); // Loại xe đạp (mountain, road, hybrid, electric, etc.)
            $table->decimal('hourly_rate', 8, 2); // Giá thuê theo giờ
            $table->decimal('daily_rate', 8, 2); // Giá thuê theo ngày
            $table->decimal('weekly_rate', 8, 2)->nullable(); // Giá thuê theo tuần
            $table->decimal('monthly_rate', 8, 2)->nullable(); // Giá thuê theo tháng
            $table->json('features')->nullable(); // Các tính năng đặc biệt (JSON array)
            $table->json('images')->nullable(); // Hình ảnh xe đạp (JSON array)
            $table->string('status')->default('available'); // available, rented, maintenance, out_of_service
            $table->string('condition')->default('excellent'); // excellent, good, fair, poor
            $table->integer('battery_level')->nullable(); // Mức pin cho xe đạp điện (0-100)
            $table->string('location')->nullable(); // Vị trí hiện tại của xe
            $table->string('qr_code')->unique()->nullable(); // Mã QR để thuê xe
            $table->date('last_maintenance_date')->nullable(); // Ngày bảo trì cuối cùng
            $table->date('next_maintenance_date')->nullable(); // Ngày bảo trì tiếp theo
            $table->integer('total_ride_hours')->default(0); // Tổng số giờ đã được thuê
            $table->decimal('total_distance', 10, 2)->default(0); // Tổng quãng đường đã đi (km)
            $table->boolean('is_active')->default(true); // Xe có đang hoạt động không
            $table->timestamps();

            // Indexes
            $table->index('status');
            $table->index('type');
            $table->index('location');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_bikes');
    }
};
