<?php

namespace App\Repositories\DTOs;

use App\Models\BikeModel;

namespace App\Repositories\DTOs;

use App\Models\BikeModel;
use Illuminate\Support\Facades\DB;

class BikeModelDtoRepository implements BikeModelDtoRepositoryInterface
{
    public function getBikeModels(): array
    {
        return BikeModel::all()->toArray();
    }

    public function getBikeModelById(int $id): array
    {
        $model = BikeModel::find($id);
        if (! $model) {
            throw new \Exception('Bike model not found');
        }

        return $model->toArray();
    }

    public function createBikeModel(array $bikeModel): array
    {
        return BikeModel::create($bikeModel)->toArray();
    }

    public function updateBikeModel(int $id, array $bikeModel): array
    {
        BikeModel::find($id)->update($bikeModel);

        return BikeModel::find($id)->toArray();
    }

    public function deleteBikeModel(int $id): array
    {
        $bikeModel = BikeModel::find($id)->toArray();
        BikeModel::destroy($id);

        return $bikeModel;
    }
}
