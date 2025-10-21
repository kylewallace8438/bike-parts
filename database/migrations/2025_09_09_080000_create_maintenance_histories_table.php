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
        Schema::create('maintenance_histories', function (Blueprint $table) {
            $table->id();
            $table->string('bike_plate')->index(); // Biển số xe đạp
            $table->string('bike_model')->nullable(); // Model xe đạp
            $table->string('bike_brand')->nullable(); // Hãng xe đạp
            $table->foreignId('rental_bike_id')->nullable()->constrained('rental_bikes')->onDelete('set null'); // Link to rental bike if exists
            $table->date('maintenance_date'); // Ngày bảo trì
            $table->string('maintenance_type'); // routine, repair, emergency, inspection, upgrade
            $table->string('priority')->default('normal'); // low, normal, high, urgent
            $table->text('description'); // Mô tả công việc bảo trì
            $table->json('parts_replaced')->nullable(); // Danh sách phụ tùng thay thế (JSON)
            $table->json('services_performed')->nullable(); // Danh sách dịch vụ thực hiện (JSON)
            $table->decimal('labor_cost', 10, 2)->default(0); // Chi phí nhân công
            $table->decimal('parts_cost', 10, 2)->default(0); // Chi phí phụ tùng
            $table->decimal('total_cost', 10, 2)->default(0); // Tổng chi phí
            $table->string('technician_name')->nullable(); // Tên thợ sửa chữa
            $table->string('technician_id')->nullable(); // ID thợ sửa chữa
            $table->string('workshop_location')->nullable(); // Vị trí workshop
            $table->integer('mileage_at_maintenance')->nullable(); // Số km tại thời điểm bảo trì
            $table->integer('hours_at_maintenance')->nullable(); // Số giờ hoạt động tại thời điểm bảo trì
            $table->string('status')->default('completed'); // scheduled, in_progress, completed, cancelled
            $table->date('scheduled_date')->nullable(); // Ngày lên lịch bảo trì
            $table->date('completed_date')->nullable(); // Ngày hoàn thành
            $table->text('notes')->nullable(); // Ghi chú thêm
            $table->json('before_images')->nullable(); // Hình ảnh trước khi bảo trì
            $table->json('after_images')->nullable(); // Hình ảnh sau khi bảo trì
            $table->text('customer_complaint')->nullable(); // Khiếu nại của khách hàng (nếu có)
            $table->text('technician_findings')->nullable(); // Phát hiện của thợ sửa chữa
            $table->text('recommendations')->nullable(); // Khuyến nghị cho lần bảo trì tiếp theo
            $table->date('next_maintenance_due')->nullable(); // Ngày bảo trì tiếp theo
            $table->string('warranty_status')->nullable(); // under_warranty, expired, not_applicable
            $table->integer('warranty_months_remaining')->nullable(); // Số tháng bảo hành còn lại
            $table->timestamps();

            // Indexes
            $table->index(['bike_plate', 'maintenance_date']);
            $table->index('maintenance_type');
            $table->index('status');
            $table->index('technician_id');
            $table->index('scheduled_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_histories');
    }
};
