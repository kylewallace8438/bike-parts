<?php

namespace App\Console\Commands\KTM;

use App\Models\BikePartCategory;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class FillTranslation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fill-translation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = [
            'front fork / triple clamp' => 'Phuộc trước / Kẹp ba',
            'handlebar / controls' => 'Tay lái / Điều khiển',
            'frame' => 'Khung xe',
            'side / main stand' => 'Chân chống bên / Chính',
            'shock absorber' => 'Giảm xóc',
            'swingarm' => 'Cánh tay đòn',
            'exhaust' => 'Hệ thống xả',
            'air filter' => 'Lọc gió',
            'tank / seat' => 'Bình xăng / Yên xe',
            'fuel pump' => 'Bơm nhiên liệu',
            'plastics' => 'Nhựa',
            'stickers' => 'Decal',
            'front wheel' => 'Bánh xe trước',
            'rear wheel' => 'Bánh xe sau',
            'wiring harness' => 'Dây điện',
            'front brake caliper' => 'Piston phanh trước',
            'rear brake caliper' => 'Piston phanh sau',
            'headlight / tail light' => 'Đèn pha / Đèn hậu',
            'ignition switch' => 'Công tắc đánh lửa',
            'brake antiblock system abs' => 'Hệ thống chống bó cứng phanh ABS',
            'crankcase' => 'Vỏ máy',
            'clutch cover' => 'Nắp côn',
            'balancer shaft' => 'Trục cân bằng',
            'cylinder' => 'Xi lanh',
            'crankshaft / piston' => 'Trục khuỷu / Piston',
            'clutch' => 'Côn',
            'gearbox main shaft' => 'Trục chính hộp số',
            'gearbox countershaft' => 'Trục hộp số phụ',
            'gear shifting mechanism' => 'Cơ cấu thay đổi số',
            'waterpump' => 'Máy bơm nước',
            'cooling system' => 'Hệ thống làm mát',
            'valves' => 'Van',
            'timing' => 'Điều chỉnh thời gian',
            'cylinder head' => 'Nắp xi lanh',
            'oil pump' => 'Bơm dầu',
            'ignition system' => 'Hệ thống đánh lửa',
            'electric starter motor' => 'Động cơ khởi động điện',
            'throttle body' => 'Hệ thống bướm ga',
            'front brake master cylinder' => 'Xylanh chính phanh trước',
            'rear brake master cylinder' => 'Xylanh chính phanh sau',
            'evaporative canister' => 'Bộ lọc hơi xăng',
            'tool kit / manuals / options' => 'Bộ công cụ / Sách hướng dẫn / Tùy chọn',
            'rear sub frame' => 'Khung phụ sau',
            'footpegs' => 'Chân vịt',
            'cover' => 'Nắp che',
            'battery' => 'Ắc quy',
            'abs' => 'Hệ thống chống bó cứng phanh',
            'side panels' => 'Tấm vỏ bên',
        ];
        foreach ($data as $key => $value) {
            BikePartCategory::where('slug', Str::slug($key))->update([
                'translate' => $value,
            ]);
        }
    }
}
