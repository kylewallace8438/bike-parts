<?php

namespace App\DTOs;

use App\Models\BikeModel;
class BikeModelQuery implements BikeModelQueryInterface
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
        $model = BikeModel::findOrFail($id);
        $model->update($bikeModel);
        return $model->toArray();
    }

    public function deleteBikeModel(int $id): array
    {
        $bikeModel = BikeModel::find($id)->toArray();
        BikeModel::destroy($id);

        return $bikeModel;
    }
}
