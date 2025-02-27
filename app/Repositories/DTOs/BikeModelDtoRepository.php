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
        return DB::transaction(function () use ($id, $bikeModel) {
            $model = BikeModel::findOrFail($id);
            $model->update($bikeModel);
            return $model->fresh()->toArray();
        });
    }

    public function deleteBikeModel(int $id): array
    {
        return DB::transaction(function () use ($id) {
            $model = BikeModel::findOrFail($id);
            $data = $model->toArray();
            $model->delete();
            return $data;
        });
    }
}
