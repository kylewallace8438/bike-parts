# Maintenance History System API Documentation

## Overview

Hệ thống quản lý lịch sử bảo trì xe đạp cho phép:
- Lưu trữ lịch sử bảo trì theo biển số xe
- Tra cứu lịch sử bảo trì bằng biển số xe
- Quản lý lịch trình bảo trì
- Thống kê chi phí và tần suất bảo trì
- Tích hợp với hệ thống cho thuê xe

## Database Schema

### Bảng `maintenance_histories`

```sql
- id (bigint, primary key)
- bike_plate (string, indexed) - Biển số xe đạp
- bike_model (string, nullable) - Model xe đạp
- bike_brand (string, nullable) - Hãng xe đạp
- rental_bike_id (foreign key, nullable) - Liên kết với bảng rental_bikes
- maintenance_date (date) - Ngày bảo trì
- maintenance_type (string) - Loại bảo trì (routine, repair, emergency, inspection, upgrade, recall)
- priority (string) - Mức độ ưu tiên (low, normal, high, urgent)
- description (text) - Mô tả công việc bảo trì
- parts_replaced (json, nullable) - Danh sách phụ tùng thay thế
- services_performed (json, nullable) - Danh sách dịch vụ thực hiện
- labor_cost (decimal) - Chi phí nhân công
- parts_cost (decimal) - Chi phí phụ tùng
- total_cost (decimal) - Tổng chi phí
- technician_name (string, nullable) - Tên thợ sửa chữa
- technician_id (string, nullable) - ID thợ sửa chữa
- workshop_location (string, nullable) - Vị trí workshop
- mileage_at_maintenance (integer, nullable) - Số km tại thời điểm bảo trì
- hours_at_maintenance (integer, nullable) - Số giờ hoạt động tại thời điểm bảo trì
- status (string) - Trạng thái (scheduled, in_progress, completed, cancelled)
- scheduled_date (date, nullable) - Ngày lên lịch bảo trì
- completed_date (date, nullable) - Ngày hoàn thành
- notes (text, nullable) - Ghi chú thêm
- before_images (json, nullable) - Hình ảnh trước khi bảo trì
- after_images (json, nullable) - Hình ảnh sau khi bảo trì
- customer_complaint (text, nullable) - Khiếu nại của khách hàng
- technician_findings (text, nullable) - Phát hiện của thợ sửa chữa
- recommendations (text, nullable) - Khuyến nghị cho lần bảo trì tiếp theo
- next_maintenance_due (date, nullable) - Ngày bảo trì tiếp theo
- warranty_status (string, nullable) - Tình trạng bảo hành
- warranty_months_remaining (integer, nullable) - Số tháng bảo hành còn lại
- created_at, updated_at (timestamps)
```

## API Endpoints

### Public Endpoints

#### 1. Tra cứu lịch sử bảo trì theo biển số xe
```
GET /api/maintenance/plate/{bikePlate}
```

**Query Parameters:**
- `start_date` - Ngày bắt đầu filter (YYYY-MM-DD)
- `end_date` - Ngày kết thúc filter (YYYY-MM-DD)
- `maintenance_type` - Loại bảo trì (routine, repair, emergency, etc.)
- `status` - Trạng thái (scheduled, in_progress, completed, cancelled)
- `technician_id` - ID thợ sửa chữa
- `per_page` - Số lượng records per page (default: 15)

**Response:**
```json
{
  "success": true,
  "data": {
    "bike_plate": "BIKE001",
    "histories": {
      "current_page": 1,
      "data": [
        {
          "id": 1,
          "bike_plate": "BIKE001",
          "bike_model": "Trek X-Caliber",
          "bike_brand": "Trek",
          "maintenance_date": "2025-09-08",
          "maintenance_type": "routine",
          "priority": "normal",
          "description": "Regular maintenance check",
          "parts_replaced": ["brake_pads", "chain"],
          "services_performed": ["cleaning", "lubrication", "adjustment"],
          "labor_cost": "150000.00",
          "parts_cost": "200000.00",
          "total_cost": "350000.00",
          "technician_name": "Nguyen Van A",
          "technician_id": "TECH001",
          "workshop_location": "Hanoi Central Workshop",
          "status": "completed",
          "completed_date": "2025-09-08",
          "next_maintenance_due": "2025-12-08",
          "rental_bike": {
            "id": 1,
            "name": "Mountain Explorer Pro",
            "qr_code": "BIKE_001"
          }
        }
      ],
      "total": 15,
      "per_page": 15
    },
    "summary": {
      "total_maintenance_cost": "2500000.00",
      "maintenance_frequency": {
        "frequency_days": 90.5,
        "total_maintenances": 15,
        "period_days": 1268
      },
      "last_maintenance_date": "2025-09-08",
      "days_since_last_maintenance": 1,
      "next_maintenance_due": "2025-12-08",
      "is_overdue": false
    }
  }
}
```

### Protected Endpoints (Require Authentication)

#### 2. Lấy danh sách tất cả maintenance records
```
GET /api/maintenance
Authorization: Bearer {token}
```

**Query Parameters:**
- `bike_plate` - Filter theo biển số xe
- `maintenance_type` - Filter theo loại bảo trì
- `status` - Filter theo trạng thái
- `priority` - Filter theo mức độ ưu tiên
- `technician_id` - Filter theo ID thợ sửa chữa
- `workshop_location` - Filter theo vị trí workshop
- `start_date` - Ngày bắt đầu
- `end_date` - Ngày kết thúc
- `sort_by` - Sắp xếp theo (maintenance_date, total_cost, priority, status)
- `sort_direction` - Hướng sắp xếp (asc, desc)
- `per_page` - Số lượng records per page

#### 3. Lấy chi tiết maintenance record
```
GET /api/maintenance/{id}
Authorization: Bearer {token}
```

#### 4. Lấy danh sách xe cần bảo trì
```
GET /api/maintenance/due/list
Authorization: Bearer {token}
```

**Response:**
```json
{
  "success": true,
  "data": {
    "total_bikes_due": 5,
    "bikes": [
      {
        "id": 1,
        "bike_plate": "BIKE001",
        "next_maintenance_due": "2025-09-05",
        "days_overdue": 4,
        "last_maintenance_type": "routine"
      }
    ]
  }
}
```

#### 5. Lấy thống kê maintenance
```
GET /api/maintenance/statistics/overview
Authorization: Bearer {token}
```

**Query Parameters:**
- `start_date` - Ngày bắt đầu filter
- `end_date` - Ngày kết thúc filter
- `bike_plate` - Filter theo biển số xe cụ thể

**Response:**
```json
{
  "success": true,
  "data": {
    "total_maintenances": 245,
    "completed_maintenances": 230,
    "scheduled_maintenances": 10,
    "high_priority_maintenances": 25,
    "total_cost": "15750000.00",
    "average_cost": "68478.26",
    "maintenance_by_type": [
      {
        "maintenance_type": "routine",
        "count": 150,
        "total_cost": "8250000.00"
      },
      {
        "maintenance_type": "repair",
        "count": 80,
        "total_cost": "6500000.00"
      }
    ],
    "maintenance_by_technician": [
      {
        "technician_name": "Nguyen Van A",
        "count": 45,
        "total_cost": "3200000.00"
      }
    ],
    "overdue_bikes": 5
  }
}
```

#### 6. Lấy average costs theo loại bảo trì
```
GET /api/maintenance/statistics/average-costs
Authorization: Bearer {token}
```

### Admin Only Endpoints

#### 7. Tạo maintenance record mới
```
POST /api/maintenance
Authorization: Bearer {admin_token}
Content-Type: application/json

{
  "bike_plate": "BIKE001",
  "bike_model": "Trek X-Caliber",
  "bike_brand": "Trek",
  "rental_bike_id": 1,
  "maintenance_date": "2025-09-10",
  "maintenance_type": "routine",
  "priority": "normal",
  "description": "Regular maintenance and inspection",
  "parts_replaced": [
    {
      "part_name": "brake_pads",
      "quantity": 2,
      "cost": 50000
    },
    {
      "part_name": "chain",
      "quantity": 1,
      "cost": 150000
    }
  ],
  "services_performed": [
    "cleaning",
    "lubrication",
    "brake_adjustment",
    "gear_tuning"
  ],
  "labor_cost": 150000,
  "parts_cost": 200000,
  "technician_name": "Nguyen Van A",
  "technician_id": "TECH001",
  "workshop_location": "Hanoi Central Workshop",
  "status": "completed",
  "completed_date": "2025-09-10",
  "notes": "Bike in excellent condition",
  "next_maintenance_due": "2025-12-10",
  "warranty_status": "under_warranty",
  "warranty_months_remaining": 6
}
```

#### 8. Cập nhật maintenance record
```
PUT /api/maintenance/{id}
Authorization: Bearer {admin_token}
```

#### 9. Xóa maintenance record
```
DELETE /api/maintenance/{id}
Authorization: Bearer {admin_token}
```

#### 10. Tạo maintenance từ rental bike
```
POST /api/maintenance/rental-bike/{rentalBikeId}
Authorization: Bearer {admin_token}
Content-Type: application/json

{
  "maintenance_date": "2025-09-10",
  "maintenance_type": "routine",
  "description": "Regular maintenance after rental",
  "technician_name": "Nguyen Van A",
  "technician_id": "TECH001",
  "workshop_location": "Hanoi Central Workshop",
  "parts_replaced": ["brake_pads"],
  "services_performed": ["cleaning", "lubrication"],
  "labor_cost": 100000,
  "parts_cost": 50000,
  "notes": "Maintenance after heavy usage",
  "next_maintenance_due": "2025-12-10"
}
```

## Maintenance Types

1. **routine** - Bảo trì định kỳ
2. **repair** - Sửa chữa
3. **emergency** - Bảo trì khẩn cấp
4. **inspection** - Kiểm tra
5. **upgrade** - Nâng cấp
6. **recall** - Thu hồi/Thay đổi theo yêu cầu nhà sản xuất

## Priority Levels

1. **low** - Thấp
2. **normal** - Bình thường
3. **high** - Cao
4. **urgent** - Khẩn cấp

## Status Flow

1. **scheduled** - Đã lên lịch
2. **in_progress** - Đang thực hiện
3. **completed** - Hoàn thành
4. **cancelled** - Đã hủy

## Integration với Rental System

Khi tạo maintenance record cho rental bike:
- Tự động lấy `bike_plate` từ `qr_code`
- Tự động cập nhật `mileage_at_maintenance` và `hours_at_maintenance`
- Tự động cập nhật `last_maintenance_date` và `next_maintenance_date` trong rental_bikes table

## Use Cases

### 1. Customer Lookup
Khách hàng có thể tra cứu lịch sử bảo trì của xe bằng biển số để:
- Kiểm tra xe đã được bảo trì gần đây chưa
- Xem các phụ tùng đã được thay thế
- Đánh giá độ tin cậy của xe

### 2. Workshop Management
Workshop có thể sử dụng để:
- Quản lý lịch trình bảo trì
- Theo dõi chi phí bảo trì
- Phân tích hiệu suất thợ sửa chữa
- Dự đoán nhu cầu phụ tùng

### 3. Fleet Management
Quản lý đội xe có thể:
- Theo dõi tổng chi phí bảo trì
- Lên kế hoạch thay thế xe
- Tối ưu hóa lịch trình bảo trì
- Phân tích ROI của từng xe

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

## Examples

### Tra cứu lịch sử bảo trì
```bash
curl -X GET "http://api.example.com/api/maintenance/plate/BIKE001" \
  -H "Accept: application/json"
```

### Tạo maintenance record
```bash
curl -X POST "http://api.example.com/api/maintenance" \
  -H "Authorization: Bearer {token}" \
  -H "Content-Type: application/json" \
  -d '{
    "bike_plate": "BIKE001",
    "maintenance_date": "2025-09-10",
    "maintenance_type": "routine",
    "description": "Regular maintenance",
    "labor_cost": 100000,
    "parts_cost": 50000,
    "technician_name": "Nguyen Van A"
  }'
```

### Lấy thống kê
```bash
curl -X GET "http://api.example.com/api/maintenance/statistics/overview?start_date=2025-01-01&end_date=2025-09-30" \
  -H "Authorization: Bearer {token}" \
  -H "Accept: application/json"
```
