# Shopify Product Adapter

## Mô tả

Class `ShopifyProductAdapter` được tạo để map dữ liệu từ Shopify JSON response sang model `Product` trong Laravel.

## Cấu trúc Database

Dựa trên migration, bảng `products` có cấu trúc như sau:

### Bảng products
- `shopify_id` (bigInteger, primary key) - ID của sản phẩm từ Shopify
- `slug` (string) - URL slug của sản phẩm
- `title` (string, nullable) - Tên sản phẩm
- `tags` (json, nullable) - Các tag của sản phẩm
- `vendor` (string, nullable) - Nhà cung cấp
- `featured_image_url` (string, nullable) - URL hình ảnh chính
- `featured_image_width` (integer, nullable) - Chiều rộng hình ảnh
- `featured_image_height` (integer, nullable) - Chiều cao hình ảnh
- `featured_image_alt_text` (string, nullable) - Alt text của hình ảnh
- `min_price` (decimal, nullable) - Giá tối thiểu
- `max_price` (decimal, nullable) - Giá tối đa
- `currency_code` (string, default 'VND') - Mã tiền tệ
- `description` (text, nullable) - Mô tả sản phẩm
- `images` (json, nullable) - Danh sách hình ảnh
- `variants` (json, nullable) - Các biến thể sản phẩm
- `metafields` (json, nullable) - Metadata
- `shopify_updated_at` (timestamp, nullable) - Thời gian cập nhật từ Shopify

## Cách sử dụng

### 1. Sử dụng Adapter trực tiếp

```php
use App\Services\ShopifyProductAdapter;

$adapter = new ShopifyProductAdapter();

// Validate dữ liệu Shopify
$isValid = $adapter->validateShopifyData($shopifyData);

// Map sang Product model (không lưu DB)
$product = $adapter->mapToProduct($shopifyData);

// Tạo hoặc cập nhật Product trong DB
$product = $adapter->createOrUpdateProduct($shopifyData);
```

### 2. Sử dụng Command Line

```bash
# Import sản phẩm từ file JSON
php artisan shopify:import-product /path/to/shopify-product.json
```

### 3. Sử dụng API Endpoints

#### Import một sản phẩm
```
POST /api/shopify/import-product
Content-Type: application/json

{
    "cursor": "eyJsYXN0X2lkIjo4OTQwMTgyODY0MTA4LCJsYXN0X3ZhbHVlIjoiODk0MDE4Mjg2NDEwOCJ9",
    "node": {
        "id": "gid://shopify/Product/8940182864108",
        "title": "Gương cho Duke/Svartpilen/Vitpilen",
        "tags": ["Duke", "KTM"],
        "vendor": "kwapp-store",
        "featuredImage": {
            "url": "https://example.com/image.jpg",
            "width": 800,
            "height": 800
        },
        "priceRange": {
            "minVariantPrice": {
                "amount": "300000.0",
                "currencyCode": "VND"
            },
            "maxVariantPrice": {
                "amount": "300000.0",
                "currencyCode": "VND"
            }
        }
    }
}
```

#### Demo endpoint
```
GET /api/shopify/demo
```

### 4. Chạy Tests

```bash
# Chạy test cho adapter
php artisan test --filter ShopifyProductAdapterTest
```

## Các tính năng chính

### 1. Mapping dữ liệu
- Trích xuất Shopify ID từ GID format
- Tự động tạo slug từ title
- Parse giá từ priceRange
- Map images và variants
- Handle date format từ Shopify

### 2. Validation
- Kiểm tra format dữ liệu Shopify
- Validate GID format
- Kiểm tra required fields

### 3. Database Operations
- Create hoặc Update product
- Tránh duplicate dựa trên shopify_id
- Preserve existing data khi update

### 4. Error Handling
- Graceful handling cho missing data
- Exception handling
- Validation errors

## Ví dụ dữ liệu đầu vào

```json
{
    "cursor": "eyJsYXN0X2lkIjo4OTQwMTgyODY0MTA4LCJsYXN0X3ZhbHVlIjoiODk0MDE4Mjg2NDEwOCJ9",
    "node": {
        "id": "gid://shopify/Product/8940182864108",
        "title": "Gương cho Duke/Svartpilen/Vitpilen",
        "tags": [
            "Duke",
            "Huqsvana",
            "KTM",
            "RC",
            "Svartpilen",
            "Vitpilen"
        ],
        "vendor": "kwapp-store",
        "featuredImage": {
            "url": "https://cdn.shopify.com/s/files/1/0733/4291/0700/files/aiease_1749388042597.jpg?v=1749389803",
            "width": 800,
            "height": 800,
            "altText": null
        },
        "priceRange": {
            "minVariantPrice": {
                "amount": "300000.0",
                "currencyCode": "VND"
            },
            "maxVariantPrice": {
                "amount": "300000.0",
                "currencyCode": "VND"
            }
        }
    }
}
```

## Kết quả sau khi mapping

Product được tạo với các thông tin:
- `shopify_id`: 8940182864108
- `slug`: "guong-cho-duke-svartpilen-vitpilen"
- `title`: "Gương cho Duke/Svartpilen/Vitpilen"
- `tags`: ["Duke", "Huqsvana", "KTM", "RC", "Svartpilen", "Vitpilen"]
- `vendor`: "kwapp-store"
- `min_price`: 300000.0
- `max_price`: 300000.0
- `currency_code`: "VND"
- Và các thông tin khác...

## Lưu ý

1. **Primary Key**: Sử dụng `shopify_id` làm primary key thay vì auto-increment ID
2. **Slug Generation**: Tự động tạo slug từ title bằng Laravel Str::slug()
3. **JSON Fields**: Tags, images, variants, metafields được lưu dưới dạng JSON
4. **Price Handling**: Giá được convert sang decimal với 2 chữ số thập phân
5. **Date Parsing**: Shopify date được parse thành Carbon instance
