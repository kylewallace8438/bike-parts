# Rental Bike Seeder

## Overview

Seeder này tạo dữ liệu test cho hệ thống rental bikes với 10 xe đạp đa dạng các loại và trạng thái.

## Dữ liệu được tạo

### 10 Rental Bikes bao gồm:

1. **Mountain Explorer Pro** (Trek X-Caliber 9)
   - Loại: Mountain bike
   - Trạng thái: Available
   - Giá: 75,000 VND/giờ

2. **City Cruiser Elite** (Specialized Sirrus X 4.0)
   - Loại: Hybrid
   - Trạng thái: Available
   - Giá: 55,000 VND/giờ

3. **Electric Power Bike** (Specialized Turbo Vado SL 4.0)
   - Loại: Electric
   - Trạng thái: Available
   - Pin: 85%
   - Giá: 120,000 VND/giờ

4. **Road Speed Demon** (Trek Émonda ALR 5)
   - Loại: Road bike
   - Trạng thái: Rented
   - Giá: 85,000 VND/giờ

5. **Adventure Touring** (Trek Checkpoint ALR 5)
   - Loại: Gravel
   - Trạng thái: Available
   - Giá: 70,000 VND/giờ

6. **Urban Commuter** (Trek FX 3 Disc)
   - Loại: Hybrid
   - Trạng thái: Maintenance
   - Giá: 45,000 VND/giờ

7. **Kids Mountain Bike** (Trek Precaliber 24)
   - Loại: Kids
   - Trạng thái: Available
   - Giá: 25,000 VND/giờ

8. **Premium Electric** (Trek Super Commuter+ 8S)
   - Loại: Electric
   - Trạng thái: Available
   - Pin: 92%
   - Giá: 150,000 VND/giờ

9. **Classic Cruiser** (Electra Townie)
   - Loại: Cruiser
   - Trạng thái: Available
   - Giá: 40,000 VND/giờ

10. **BMX Freestyle** (Haro Downtown)
    - Loại: BMX
    - Trạng thái: Out of service
    - Giá: 35,000 VND/giờ

## Phân bố trạng thái

- **Available**: 6 xe (60%)
- **Rented**: 1 xe (10%)
- **Maintenance**: 1 xe (10%)
- **Out of service**: 1 xe (10%)

## Phân bố loại xe

- **Electric**: 2 xe
- **Hybrid**: 2 xe
- **Mountain**: 1 xe
- **Road**: 1 xe
- **Gravel**: 1 xe
- **Kids**: 1 xe
- **Cruiser**: 1 xe
- **BMX**: 1 xe

## Tính năng đặc biệt

### Dữ liệu realistic:
- QR codes unique (BIKE_001 đến BIKE_010)
- Lịch sử bảo trì và lịch trình tiếp theo
- Tổng giờ thuê và quãng đường đi
- Địa điểm đa dạng trong Hà Nội và TP.HCM
- Features JSON với tính năng thực tế cho từng loại xe
- Images array với URLs mẫu

### Electric bikes:
- Battery level được set (85%, 92%)
- Features bao gồm motor, GPS, USB charging
- Giá cao hơn các loại khác

### Maintenance data:
- Last maintenance date và next maintenance date realistic
- Một xe (BMX) có next maintenance overdue để test
- Total ride hours và distance phù hợp với từng loại xe

## Cách sử dụng

### 1. Chạy seeder đơn lẻ:
```bash
php artisan db:seed --class=RentalBikeSeeder
```

### 2. Chạy tất cả seeders:
```bash
php artisan db:seed
```

### 3. Reset và seed lại:
```bash
php artisan migrate:fresh --seed
```

### 4. Sử dụng Factory để tạo thêm:
```php
// Tạo 5 xe available
RentalBike::factory()->available()->count(5)->create();

// Tạo 3 xe electric
RentalBike::factory()->electric()->count(3)->create();

// Tạo 2 xe mountain
RentalBike::factory()->mountain()->count(2)->create();
```

## Factory Methods

RentalBikeFactory cung cấp các methods:

- `available()` - Tạo xe trạng thái available
- `rented()` - Tạo xe đang được thuê
- `maintenance()` - Tạo xe đang bảo trì
- `electric()` - Tạo xe điện với battery
- `mountain()` - Tạo xe đạp leo núi

## Integration với Maintenance History

Seeder này được thiết kế để chạy trước MaintenanceHistorySeeder:

1. **RentalBikeSeeder** tạo các xe đạp
2. **MaintenanceHistorySeeder** tạo lịch sử bảo trì cho các xe này

Thứ tự này đảm bảo MaintenanceHistory có thể reference đến rental_bike_id.

## Test Data Quality

- **Realistic pricing**: Giá dựa trên loại xe thực tế
- **Proper relationships**: QR codes unique, maintenance dates logical
- **Diverse locations**: Nhiều địa điểm trong các thành phố lớn
- **Feature accuracy**: Features phù hợp với từng loại xe
- **Status distribution**: Phân bố trạng thái giống thực tế
- **Maintenance scheduling**: Lịch bảo trì realistic

## Debugging

Seeder hiển thị summary sau khi chạy:
- Số lượng xe được tạo
- Phân bố theo trạng thái
- Phân bố theo loại xe

Này giúp verify dữ liệu được tạo đúng.
