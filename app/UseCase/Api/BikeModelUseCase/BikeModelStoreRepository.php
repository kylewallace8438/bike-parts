<?php

namespace App\UseCase\Api\BikeModelUseCase;

use App\Http\Requests\RequestModels\BikeModelRequestModel;
use App\Models\BikeModel;

class BikeModelStoreRepository implements BikeModelStoreRepositoryInterface
{
    public function handle(BikeModelRequestModel $request)
    {
        return BikeModel::create($request->toArray())->toArray();
    }
}
