# Bike Rental System API Documentation

## Overview

Hệ thống cho thuê xe đạp với các tính năng:
- Quản lý xe đạp cho thuê
- Đặt và quản lý lịch thuê xe
- Quản lý lịch trình khả dụng của xe
- Hệ thống thanh toán và đánh giá

## Database Schema

### 1. Bảng `rental_bikes`
Lưu trữ thông tin các xe đạp cho thuê.

```sql
- id (bigint, primary key)
- name (string) - Tên xe đạp
- model (string) - Model xe đạp
- brand (string) - Hãng xe đạp
- description (text, nullable) - Mô tả chi tiết
- color (string, nullable) - Màu sắc
- size (string, nullable) - Kích thước (S, M, L, XL)
- type (string) - Loại xe đạp (mountain, road, hybrid, electric, etc.)
- hourly_rate (decimal) - Giá thuê theo giờ
- daily_rate (decimal) - Giá thuê theo ngày
- weekly_rate (decimal, nullable) - Giá thuê theo tuần
- monthly_rate (decimal, nullable) - Giá thuê theo tháng
- features (json, nullable) - Các tính năng đặc biệt
- images (json, nullable) - Hình ảnh xe đạp
- status (string) - available, rented, maintenance, out_of_service
- condition (string) - excellent, good, fair, poor
- battery_level (integer, nullable) - Mức pin cho xe đạp điện (0-100)
- location (string, nullable) - Vị trí hiện tại của xe
- qr_code (string, unique, nullable) - Mã QR để thuê xe
- last_maintenance_date (date, nullable) - Ngày bảo trì cuối cùng
- next_maintenance_date (date, nullable) - Ngày bảo trì tiếp theo
- total_ride_hours (integer) - Tổng số giờ đã được thuê
- total_distance (decimal) - Tổng quãng đường đã đi (km)
- is_active (boolean) - Xe có đang hoạt động không
- created_at, updated_at (timestamps)
```

### 2. Bảng `bike_rentals`
Lưu trữ thông tin các lần thuê xe.

```sql
- id (bigint, primary key)
- rental_bike_id (foreign key to rental_bikes)
- user_id (foreign key to users)
- start_time (datetime) - Thời gian bắt đầu thuê
- end_time (datetime) - Thời gian kết thúc thuê (dự kiến)
- actual_end_time (datetime, nullable) - Thời gian trả xe thực tế
- rental_type (string) - hourly, daily, weekly, monthly
- base_price (decimal) - Giá cơ bản
- additional_fees (decimal) - Phí phát sinh
- discount (decimal) - Giảm giá
- total_price (decimal) - Tổng tiền
- status (string) - pending, confirmed, active, completed, cancelled
- payment_status (string) - unpaid, paid, refunded, partially_refunded
- payment_method (string, nullable) - cash, card, online, wallet
- pickup_location (string, nullable) - Địa điểm nhận xe
- return_location (string, nullable) - Địa điểm trả xe
- notes (text, nullable) - Ghi chú
- damage_report (text, nullable) - Báo cáo hư hỏng
- damage_fee (decimal) - Phí sửa chữa hư hỏng
- rating (integer, nullable) - Đánh giá (1-5 sao)
- review (text, nullable) - Nhận xét của khách hàng
- distance_traveled (decimal, nullable) - Quãng đường đã đi
- route_data (json, nullable) - Dữ liệu lộ trình (GPS tracking)
- cancelled_at (datetime, nullable) - Thời gian hủy
- cancelled_by (string, nullable) - user, admin, system
- cancellation_reason (text, nullable) - Lý do hủy
- created_at, updated_at (timestamps)
```

### 3. Bảng `bike_availability`
Lưu trữ lịch trình khả dụng của xe.

```sql
- id (bigint, primary key)
- rental_bike_id (foreign key to rental_bikes)
- date (date) - Ngày
- start_time (time) - Giờ bắt đầu có sẵn
- end_time (time) - Giờ kết thúc có sẵn
- status (string) - available, unavailable, maintenance, reserved
- reason (string, nullable) - Lý do không có sẵn
- special_price (decimal, nullable) - Giá đặc biệt cho ngày này
- is_peak_time (boolean) - Có phải giờ cao điểm không
- notes (text, nullable) - Ghi chú
- created_at, updated_at (timestamps)
```

## API Endpoints

### Authentication
Tất cả API routes bắt đầu với `/api/rental/`

### Public Endpoints

#### 1. Lấy danh sách xe đạp
```
GET /api/rental/bikes
```

**Query Parameters:**
- `type` - Loại xe (mountain, road, hybrid, electric, bmx, cruiser)
- `location` - Vị trí xe
- `status` - Trạng thái xe (mặc định: available)
- `date` - Kiểm tra availability cho ngày cụ thể
- `search` - Tìm kiếm theo tên, model, brand
- `sort_by` - Sắp xếp theo (name, hourly_rate, daily_rate, etc.)
- `sort_direction` - asc/desc
- `per_page` - Số lượng items per page (mặc định: 15)

**Response:**
```json
{
  "success": true,
  "data": {
    "current_page": 1,
    "data": [
      {
        "id": 1,
        "name": "Mountain Explorer Pro",
        "model": "MXP-2024",
        "brand": "Trek",
        "type": "mountain",
        "hourly_rate": "50000.00",
        "daily_rate": "300000.00",
        "location": "Hanoi Central",
        "status": "available",
        "first_image": "https://example.com/bike1.jpg"
      }
    ],
    "total": 25,
    "per_page": 15
  }
}
```

#### 2. Lấy chi tiết xe đạp
```
GET /api/rental/bikes/{id}
```

**Response:**
```json
{
  "success": true,
  "data": {
    "id": 1,
    "name": "Mountain Explorer Pro",
    "model": "MXP-2024",
    "brand": "Trek",
    "description": "Professional mountain bike for all terrains",
    "type": "mountain",
    "color": "Red",
    "size": "L",
    "hourly_rate": "50000.00",
    "daily_rate": "300000.00",
    "features": ["suspension", "disc_brakes", "21_speed"],
    "images": ["image1.jpg", "image2.jpg"],
    "condition": "excellent",
    "location": "Hanoi Central",
    "availability": [
      {
        "date": "2025-09-10",
        "status": "available",
        "start_time": "08:00:00",
        "end_time": "18:00:00"
      }
    ]
  }
}
```

#### 3. Kiểm tra availability
```
GET /api/rental/bikes/{id}/availability?start_time=2025-09-10 08:00:00&end_time=2025-09-10 18:00:00
```

#### 4. Lấy types xe đạp
```
GET /api/rental/bike-types
```

#### 5. Lấy locations
```
GET /api/rental/locations
```

### Protected Endpoints (Require Authentication)

#### 6. Lấy danh sách rental của user
```
GET /api/rental/rentals
Authorization: Bearer {token}
```

#### 7. Tạo booking mới
```
POST /api/rental/rentals
Authorization: Bearer {token}
Content-Type: application/json

{
  "rental_bike_id": 1,
  "start_time": "2025-09-10 08:00:00",
  "end_time": "2025-09-10 18:00:00",
  "rental_type": "daily",
  "pickup_location": "Hanoi Central",
  "return_location": "Hanoi Central",
  "notes": "Need helmet size L"
}
```

#### 8. Lấy chi tiết rental
```
GET /api/rental/rentals/{id}
Authorization: Bearer {token}
```

#### 9. Hủy rental
```
POST /api/rental/rentals/{id}/cancel
Authorization: Bearer {token}
Content-Type: application/json

{
  "cancellation_reason": "Change of plans"
}
```

#### 10. Kết thúc rental
```
POST /api/rental/rentals/{id}/end
Authorization: Bearer {token}
Content-Type: application/json

{
  "damage_report": "Small scratch on frame",
  "distance_traveled": 15.5,
  "rating": 5,
  "review": "Great bike, smooth ride!"
}
```

### Admin Only Endpoints

#### 11. Tạo xe đạp mới
```
POST /api/rental/bikes
Authorization: Bearer {admin_token}
Content-Type: application/json

{
  "name": "City Cruiser Deluxe",
  "model": "CCD-2024",
  "brand": "Giant",
  "type": "cruiser",
  "hourly_rate": 40000,
  "daily_rate": 250000,
  "description": "Comfortable city bike",
  "color": "Blue",
  "size": "M",
  "features": ["basket", "lights", "bell"],
  "location": "Hanoi Central"
}
```

#### 12. Cập nhật xe đạp
```
PUT /api/rental/bikes/{id}
Authorization: Bearer {admin_token}
```

#### 13. Xóa xe đạp
```
DELETE /api/rental/bikes/{id}
Authorization: Bearer {admin_token}
```

#### 14. Confirm rental
```
POST /api/rental/rentals/{id}/confirm
Authorization: Bearer {admin_token}
```

#### 15. Start rental
```
POST /api/rental/rentals/{id}/start
Authorization: Bearer {admin_token}
```

#### 16. Quản lý availability
```
POST /api/rental/bikes/{bikeId}/availability
PUT /api/rental/bikes/{bikeId}/availability/{availabilityId}
DELETE /api/rental/bikes/{bikeId}/availability/{availabilityId}
Authorization: Bearer {admin_token}
```

#### 17. Tạo availability bulk
```
POST /api/rental/bikes/{bikeId}/availability/bulk
Authorization: Bearer {admin_token}
Content-Type: application/json

{
  "start_date": "2025-09-10",
  "end_date": "2025-09-20",
  "start_time": "08:00:00",
  "end_time": "18:00:00",
  "status": "available"
}
```

#### 18. Set maintenance schedule
```
POST /api/rental/bikes/{bikeId}/maintenance
Authorization: Bearer {admin_token}
Content-Type: application/json

{
  "start_date": "2025-09-15",
  "end_date": "2025-09-17",
  "reason": "Regular maintenance",
  "notes": "Replace brake pads"
}
```

## Rental Flow

### Customer Flow:
1. **Browse bikes** - `GET /api/rental/bikes`
2. **Check availability** - `GET /api/rental/bikes/{id}/availability`
3. **Create booking** - `POST /api/rental/rentals`
4. **Wait for confirmation** - Status: `pending`
5. **Pick up bike** - Status: `active`
6. **Return bike** - `POST /api/rental/rentals/{id}/end`
7. **Complete rental** - Status: `completed`

### Admin Flow:
1. **Review booking** - `GET /api/rental/rentals/{id}`
2. **Confirm booking** - `POST /api/rental/rentals/{id}/confirm`
3. **Start rental** - `POST /api/rental/rentals/{id}/start`
4. **Process return** - Admin can also end rental

## Status Flow

### Bike Status:
- `available` → `rented` (when rental starts)
- `rented` → `available` (when rental ends)
- `maintenance` → `available` (after maintenance)

### Rental Status:
- `pending` → `confirmed` → `active` → `completed`
- `pending` → `cancelled`
- `confirmed` → `cancelled`

## Error Responses

```json
{
  "success": false,
  "message": "Error message",
  "errors": {
    "field": ["Validation error message"]
  }
}
```

## Setup Instructions

1. **Run migrations:**
```bash
php artisan migrate
```

2. **Register admin middleware** (in `app/Http/Kernel.php`):
```php
'admin' => \App\Http\Middleware\AdminMiddleware::class,
```

3. **Add role field to users table** (if not exists):
```sql
ALTER TABLE users ADD COLUMN role VARCHAR(50) DEFAULT 'user';
```

4. **Seed sample data** (optional):
Create seeders for rental_bikes and bike_availability.

## Features To Consider

### Future Enhancements:
1. **Real-time tracking** - GPS tracking của xe đạp
2. **Payment integration** - Stripe, PayPal, VNPay
3. **Push notifications** - Thông báo booking, reminder
4. **Analytics dashboard** - Thống kê revenue, popular bikes
5. **Mobile app** - React Native hoặc Flutter
6. **IoT integration** - Smart locks, bike sensors
7. **Multi-language support** - i18n
8. **Loyalty program** - Points, discounts
9. **Insurance options** - Bike insurance
10. **Weather integration** - Check weather for rental dates
