<?php

namespace App\UseCase\Api\BikeModelUseCase;

use App\Http\Requests\RequestModels\BikeModelRequestModel;
use App\Models\BikeModel;

class BikeModelStoreRepository implements BikeModelStoreRepositoryInterface
{
    public function handle(BikeModelRequestModel $request): array
    {
        try {
            $data = $request->validated();
            return BikeModel::create($request->toArray())->toArray();
        } catch (\Exception $e) {
            throw new \RuntimeException('Failed to create bike model: ' . $e->getMessage());
        }
    }
}
