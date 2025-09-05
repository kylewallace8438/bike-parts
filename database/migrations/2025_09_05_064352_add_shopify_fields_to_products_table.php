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
        Schema::table('products', function (Blueprint $table) {
           $table->string('title')->nullable();
            $table->json('tags')->nullable(); // Lưu array tags dưới dạng JSON
            $table->string('vendor')->nullable();
            $table->string('featured_image_url')->nullable();
            $table->integer('featured_image_width')->nullable();
            $table->integer('featured_image_height')->nullable();
            $table->string('featured_image_alt_text')->nullable();
            $table->decimal('min_price', 15, 2)->nullable(); // Giá tối thiểu
            $table->decimal('max_price', 15, 2)->nullable(); // Giá tối đa
            $table->string('currency_code', 3)->default('VND'); // Mã tiền tệ
            $table->text('description')->nullable(); // Mô tả sản phẩm
            $table->json('images')->nullable(); // Lưu array images dưới dạng JSON
            $table->json('variants')->nullable(); // Lưu array variants dưới dạng JSON
            $table->json('metafields')->nullable(); // Lưu metafields dưới dạng JSON
            $table->timestamp('shopify_updated_at')->nullable(); // Thời gian cập nhật từ Shopify
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'tags',
                'vendor',
                'featured_image_url',
                'featured_image_width',
                'featured_image_height',
                'featured_image_alt_text',
                'min_price',
                'max_price',
                'currency_code',
                'description',
                'images',
                'variants',
                'metafields',
                'shopify_updated_at'
            ]);
        });
    }
};
