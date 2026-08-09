<?php
namespace App\Services;

use App\Models\MaintenanceHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class MaintenanceService
{
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
        $query = MaintenanceHistory::with('images')->where('maintainer_id', $maintainerId);

        if ($search) {
            $query->where('bike_model', 'like', "%{$search}%")
                ->orWhere('plate', 'like', "%{$search}%");
        }

        return $query->paginate($limit);
    }

}
