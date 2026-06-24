<?php
namespace App\Services;

use App\Models\Bike;
use App\Models\MaintenanceHistory;
use App\Models\QrLog;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MaintenanceService
{
    public function __construct(
        protected QrService $qrService
    )
    {

    }

    public function store(array $data)
    {
        try {
            $data = Arr::only($data, [
                'bike_id',
                'details',
                'total',
                'odometer',
                'brand_id',
                'bike_model',
                'maintainer_id',
                'plate',
                'images'
            ]);
            return DB::transaction(function () use ($data) {
                $maintenance = MaintenanceHistory::create($data);
                $maintenance->images()->createMany(Arr::get($data, 'images', []));
                $uuid = Str::uuid7()->toString();
                $qrPath = $this->qrService->generate(
                    route('qr.serve', ['uuid' => $uuid]),
                    [
                        'label_text' => "{$maintenance->bike_model} - " . \Carbon\Carbon::now()->format('Y-m-d'), 'filename' => "maintenance_{$maintenance->id}"
                    ]
                );
                $maintenance->qrLog()->create([
                    'qr_path' => $qrPath,
                    'uuid' => $uuid
                ]);
                return $maintenance;
            });
        } catch (\Exception $e) {
            // Handle the exception, log it, or return an error response
            throw $e; // Rethrow the exception for now
        }
    }

    public function getByMaintainerId(Request $request)
    {
        $maintainerId = $request->user()->id;
        $limit = $request->query('limit', 10);
        $search = $request->query('search', null);
        $query = MaintenanceHistory::with('images', 'qrLog')->where('maintainer_id', $maintainerId);

        if ($search) {
            $query->where('bike_model', 'like', "%{$search}%")
                ->orWhere('plate', 'like', "%{$search}%");
        }

        return $query->paginate($limit);
    }

}
