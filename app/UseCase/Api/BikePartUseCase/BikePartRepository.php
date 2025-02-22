<?php

namespace App\UseCase\Api\BikePartUseCase;

use App\Models\BikePart;
use Illuminate\Support\Facades\DB;

class BikePartStoreRepository implements BikePartStoreRepositoryInterface
{
    public function handle(array $bikePart): array
    {
        DB::beginTransaction();
        try {
            $bikePart = BikePart::create($bikePart)->toArray();
            DB::commit();
            return $bikePart;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
