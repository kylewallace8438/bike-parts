<?php

namespace App\UseCase\Api\BikePartUseCase;

use App\Models\BikePart;
use Illuminate\Support\Facades\DB;

class BikePartStoreRepository implements BikePartStoreRepositoryInterface
{
    public function handle(array $bikePart): array
    {
        try {
            $bikePart = BikePart::create($bikePart)->toArray();
            return $bikePart;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
