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
        Schema::create('garages', function (Blueprint $table) {
            $table->id();
            $table->string('namer'); // Tên gara
            $table->string('location'); // Vị trí gara
            $table->double('longitude', 10, 7)->nullable(); // Kinh độ
            $table->double('latitude', 10, 7)->nullable(); // Vĩ độ
            $table->string('contact_number')->nullable(); // Số điện thoại liên hệ
            $table->string('email')->nullable(); // Email liên hệ
            $table->text('description')->nullable(); // Dịch vụ cung cấp (JSON array)
            $table->json('services_offered')->nullable(); // Dịch vụ cung cấp (JSON array)
            $table->json('images')->nullable(); // Hình ảnh gara (JSON array)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garages');
    }
};
