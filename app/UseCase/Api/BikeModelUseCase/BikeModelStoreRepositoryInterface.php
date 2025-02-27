<?php

namespace App\UseCase\Api\BikeModelUseCase;

use App\Http\Requests\RequestModels\BikeModelRequestModel;

interface BikeModelStoreRepositoryInterface
{
   public function handle(BikeModelRequestModel $request): array;
}
