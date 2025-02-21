<?php
namespace App\Http\UseCase\Api\BikeModelUseCase;

use App\Models\BikeModel;

class BikeModelRepository implements BikeModelRepositoryInterface
{
    public function getBikeModels(): array
    {
        return BikeModel::all()->toArray();
    }

    public function getBikeModelById(int $id): array
    {
        return BikeModel::find($id)->toArray();
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
