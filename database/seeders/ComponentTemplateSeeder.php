<?php

namespace Database\Seeders;

use App\Models\ComponentTemplate;
use Illuminate\Database\Seeder;

class ComponentTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ComponentTemplate::truncate();

        $templates = [
            // ==========================================
            // Bike Type: scooter (Xe tay ga)
            // Honda Air Blade, Vision, Lead, SH
            // Yamaha NVX, Grande
            // ==========================================
            [
                'bike_type' => 'scooter',
                'component_key' => 'engine_oil',
                'name_vi' => 'Nhớt máy',
                'default_interval_km' => 2000,
                'default_interval_days' => 90,
                'warning_threshold_pct' => 85,
                'description' => 'Bôi trơn động cơ, giảm ma sát. Dấu hiệu cần thay: xe nóng bất thường, tiếng máy to hơn.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'gear_oil',
                'name_vi' => 'Nhớt hộp số (nhớt láp)',
                'default_interval_km' => 6000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Bôi trơn hệ thống truyền động. Dấu hiệu: sang số nặng, có tiếng kêu lạ vùng hộp số.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'spark_plug',
                'name_vi' => 'Bugi',
                'default_interval_km' => 10000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Tạo tia lửa đốt cháy hòa khí. Dấu hiệu: xe khó nổ, giật khi tăng ga, hao xăng.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'air_filter',
                'name_vi' => 'Lọc gió',
                'default_interval_km' => 10000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Lọc bụi không khí vào buồng đốt. Dấu hiệu: xe yếu, hao xăng, khói đen.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'drive_belt',
                'name_vi' => 'Dây curoa truyền động',
                'default_interval_km' => 20000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Truyền lực từ động cơ đến bánh xe. Dấu hiệu: tiếng rít khi tăng tốc, xe yếu hẳn.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'clutch_weight',
                'name_vi' => 'Bố ba càng / Bi nồi',
                'default_interval_km' => 15000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Bộ ly hợp tự động xe ga. Dấu hiệu: xe giật khi khởi hành, mất tốc ở tua cao.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'coolant',
                'name_vi' => 'Nước làm mát',
                'default_interval_km' => 20000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Giải nhiệt cho động cơ. Dấu hiệu: đồng hồ nhiệt tăng cao, xe nóng bất thường.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'brake_pad_front',
                'name_vi' => 'Má phanh trước',
                'default_interval_km' => 12000,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Giảm tốc và dừng xe. Dấu hiệu: phanh kêu, tay phanh bóp sâu, phanh yếu.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'brake_pad_rear',
                'name_vi' => 'Má phanh sau',
                'default_interval_km' => 15000,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Giảm tốc và dừng xe. Dấu hiệu: phanh kêu, chân phanh đạp sâu, phanh yếu.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'battery',
                'name_vi' => 'Bình ắc quy',
                'default_interval_km' => null,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Cấp điện khởi động và hệ thống điện. Dấu hiệu: đề yếu, đèn mờ, xe không nổ.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'front_tire',
                'name_vi' => 'Lốp trước',
                'default_interval_km' => 15000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Bám đường, giảm xóc. Dấu hiệu: hoa lốp mòn trơn, nứt thành lốp, xe trượt khi phanh.',
            ],
            [
                'bike_type' => 'scooter',
                'component_key' => 'rear_tire',
                'name_vi' => 'Lốp sau',
                'default_interval_km' => 12000,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Bám đường, truyền lực. Dấu hiệu: hoa lốp mòn trơn, nứt thành lốp, xe trượt.',
            ],

            // ==========================================
            // Bike Type: manual (Xe số)
            // Honda Wave, Dream, Blade
            // Yamaha Sirius, Jupiter
            // ==========================================
            [
                'bike_type' => 'manual',
                'component_key' => 'engine_oil',
                'name_vi' => 'Nhớt máy',
                'default_interval_km' => 1500,
                'default_interval_days' => 90,
                'warning_threshold_pct' => 85,
                'description' => 'Bôi trơn động cơ. Xe số cần thay nhớt thường xuyên hơn do truyền động trực tiếp.',
            ],
            [
                'bike_type' => 'manual',
                'component_key' => 'spark_plug',
                'name_vi' => 'Bugi',
                'default_interval_km' => 8000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Tạo tia lửa đốt cháy hòa khí. Dấu hiệu: xe khó nổ, giật khi tăng ga.',
            ],
            [
                'bike_type' => 'manual',
                'component_key' => 'air_filter',
                'name_vi' => 'Lọc gió',
                'default_interval_km' => 8000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Lọc bụi không khí. Dấu hiệu: xe yếu, hao xăng, khói đen.',
            ],
            [
                'bike_type' => 'manual',
                'component_key' => 'sprocket_chain',
                'name_vi' => 'Nhông sên dĩa',
                'default_interval_km' => 15000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Hệ thống truyền động xích xe số. Dấu hiệu: sên kêu, sên chùng, răng nhông mòn.',
            ],
            [
                'bike_type' => 'manual',
                'component_key' => 'brake_pad_front',
                'name_vi' => 'Má phanh trước',
                'default_interval_km' => 10000,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Giảm tốc và dừng xe. Dấu hiệu: phanh kêu, phanh yếu.',
            ],
            [
                'bike_type' => 'manual',
                'component_key' => 'brake_pad_rear',
                'name_vi' => 'Guốc phanh sau (Phanh đùm)',
                'default_interval_km' => 15000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Phanh đùm xe số. Dấu hiệu: phanh yếu, chân phanh đạp sâu.',
            ],
            [
                'bike_type' => 'manual',
                'component_key' => 'battery',
                'name_vi' => 'Bình ắc quy',
                'default_interval_km' => null,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Cấp điện khởi động. Dấu hiệu: đề yếu, đèn mờ.',
            ],
            [
                'bike_type' => 'manual',
                'component_key' => 'front_tire',
                'name_vi' => 'Lốp trước',
                'default_interval_km' => 20000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Bám đường. Dấu hiệu: mòn hoa lốp, nứt thành.',
            ],
            [
                'bike_type' => 'manual',
                'component_key' => 'rear_tire',
                'name_vi' => 'Lốp sau',
                'default_interval_km' => 15000,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Bám đường, truyền lực. Dấu hiệu: mòn hoa lốp, nứt thành.',
            ],

            // ==========================================
            // Bike Type: underbone_clutch (Xe côn tay)
            // Honda Winner, Yamaha Exciter, Suzuki Raider
            // ==========================================
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'engine_oil',
                'name_vi' => 'Nhớt máy',
                'default_interval_km' => 2000,
                'default_interval_days' => 60,
                'warning_threshold_pct' => 85,
                'description' => 'Xe côn tay chạy tua cao hơn, cần nhớt tốt và thay thường xuyên.',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'spark_plug',
                'name_vi' => 'Bugi',
                'default_interval_km' => 8000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Tạo tia lửa đốt cháy hòa khí.',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'air_filter',
                'name_vi' => 'Lọc gió',
                'default_interval_km' => 8000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Lọc bụi không khí vào buồng đốt.',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'sprocket_chain',
                'name_vi' => 'Nhông sên dĩa',
                'default_interval_km' => 12000,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Hệ thống truyền động xích. Xe côn tay hao sên nhanh hơn do mô-men xoắn lớn.',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'clutch_plate',
                'name_vi' => 'Bộ bố côn (Đĩa côn)',
                'default_interval_km' => 20000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Bộ ly hợp tay côn. Dấu hiệu: côn trượt, lên ga mà xe không tăng tốc tương ứng.',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'coolant',
                'name_vi' => 'Nước làm mát',
                'default_interval_km' => 20000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Giải nhiệt cho động cơ (nếu xe làm mát bằng nước).',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'brake_pad_front',
                'name_vi' => 'Má phanh trước',
                'default_interval_km' => 10000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Phanh đĩa trước. Dấu hiệu: phanh kêu, tay phanh bóp sâu.',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'brake_pad_rear',
                'name_vi' => 'Má phanh sau',
                'default_interval_km' => 12000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Phanh đĩa/đùm sau.',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'battery',
                'name_vi' => 'Bình ắc quy',
                'default_interval_km' => null,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Cấp điện khởi động và hệ thống điện.',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'front_tire',
                'name_vi' => 'Lốp trước',
                'default_interval_km' => 15000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Bám đường.',
            ],
            [
                'bike_type' => 'underbone_clutch',
                'component_key' => 'rear_tire',
                'name_vi' => 'Lốp sau',
                'default_interval_km' => 12000,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Bám đường, truyền lực.',
            ],

            // ==========================================
            // Bike Type: sport_cruiser (Xe mô tô PKL)
            // Honda CB650R, Yamaha MT-15, Kawasaki Z300
            // ==========================================
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'engine_oil',
                'name_vi' => 'Nhớt máy',
                'default_interval_km' => 3000,
                'default_interval_days' => 90,
                'warning_threshold_pct' => 85,
                'description' => 'Nhớt động cơ PKL, thường dùng nhớt tổng hợp toàn phần (Full Synthetic).',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'spark_plug',
                'name_vi' => 'Bugi',
                'default_interval_km' => 12000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Bugi iridium/platinum cho PKL.',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'air_filter',
                'name_vi' => 'Lọc gió',
                'default_interval_km' => 15000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Lọc gió hiệu suất cao.',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'sprocket_chain',
                'name_vi' => 'Nhông sên dĩa',
                'default_interval_km' => 20000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Sên PKL (thường sên phong ba DID, RK). Cần bôi trơn thường xuyên.',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'clutch_plate',
                'name_vi' => 'Bộ bố côn (Đĩa côn)',
                'default_interval_km' => 30000,
                'default_interval_days' => 1095,
                'warning_threshold_pct' => 85,
                'description' => 'Bộ ly hợp PKL bền hơn nhưng giá thành cao.',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'coolant',
                'name_vi' => 'Nước làm mát',
                'default_interval_km' => 20000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Giải nhiệt cho động cơ.',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'brake_pad_front',
                'name_vi' => 'Má phanh trước',
                'default_interval_km' => 8000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Phanh đĩa trước (thường đĩa đôi).',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'brake_pad_rear',
                'name_vi' => 'Má phanh sau',
                'default_interval_km' => 10000,
                'default_interval_days' => 365,
                'warning_threshold_pct' => 85,
                'description' => 'Phanh đĩa sau.',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'battery',
                'name_vi' => 'Bình ắc quy',
                'default_interval_km' => null,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Ắc quy PKL (thường loại MF hoặc Lithium).',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'front_tire',
                'name_vi' => 'Lốp trước',
                'default_interval_km' => 10000,
                'default_interval_days' => 730,
                'warning_threshold_pct' => 85,
                'description' => 'Lốp xe PKL mềm hơn, bám đường tốt nhưng mòn nhanh.',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'rear_tire',
                'name_vi' => 'Lốp sau',
                'default_interval_km' => 8000,
                'default_interval_days' => 545,
                'warning_threshold_pct' => 85,
                'description' => 'Lốp sau PKL, mòn nhanh nhất do truyền lực trực tiếp.',
            ],
            [
                'bike_type' => 'sport_cruiser',
                'component_key' => 'oil_filter',
                'name_vi' => 'Lọc nhớt',
                'default_interval_km' => 6000,
                'default_interval_days' => 180,
                'warning_threshold_pct' => 85,
                'description' => 'Lọc cặn trong nhớt. Thay mỗi 2 lần thay nhớt (PKL thường có lọc nhớt rời).',
            ],
        ];

        foreach ($templates as $template) {
            ComponentTemplate::create($template);
        }
    }
}

