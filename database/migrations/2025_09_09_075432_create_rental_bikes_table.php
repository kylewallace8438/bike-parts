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
            $table->unsignedBigInteger('brand_id'); // Hãng xe
            $table->text('description')->nullable(); // Mô tả chi tiết
            $table->string('color')->nullable(); // Màu sắc
            $table->integer('type'); // Loại xe đạp (mountain, road, hybrid, electric, etc.)
            $table->decimal('hourly_rate', 15, 2); // Giá thuê theo giờ
            $table->decimal('daily_rate', 15, 2); // Giá thuê theo ngày
            $table->decimal('weekly_rate', 15, 2)->nullable(); // Giá thuê theo tuần
            $table->decimal('monthly_rate', 15, 2)->nullable(); // Giá thuê theo tháng
            $table->json('features')->nullable(); // Các tính năng đặc biệt (JSON array)
            $table->json('images')->nullable(); // Hình ảnh xe đạp (JSON array)
            $table->string('status')->default('available'); // available, rented, maintenance, out_of_service
            $table->string('qr_code')->unique()->nullable(); // Mã QR để thuê xe
            $table->boolean('is_active')->default(true); // Xe có đang hoạt động không
            $table->timestamps();
            $table->softDeletes();
            // Indexes
            $table->index('status');
            $table->index('type');
            $table->index('is_active');
            $table->index('brand_id');
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
