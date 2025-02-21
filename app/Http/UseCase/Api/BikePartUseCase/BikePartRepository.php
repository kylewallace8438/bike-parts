<?php
namespace App\Http\UseCase\Api\BikeModelUseCase;

use App\Http\UseCase\Api\BikePartUseCase\BikePartRepositoryInterface;
use App\Models\BikePart;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class BikePartRepository implements BikePartRepositoryInterface
{
    public function getBikeParts(): array
    {
        return BikePart::all()->toArray();
    }

    public function getBikePartById(int $id): array
    {
        $bikePart = BikePart::find($id);
        if (!$bikePart) {
            throw new ModelNotFoundException("Bike part with ID {$id} not found");
        }
        return $bikePart->toArray();
    }

    public function createBikePart(array $bikePart): array
    {
        return BikePart::create($bikePart)->toArray();
    }

    public function updateBikePart(int $id, array $bikePart): array
    {
        $model = BikePart::find($id);
        if (!$model) {
            throw new ModelNotFoundException("Bike part with ID {$id} not found");
        }
        $model->update($bikePart);
        return $model->fresh()->toArray();
    }

    public function deleteBikePart(int $id): array
    {
        return DB::transaction(function () use ($id) {
            $bikePart = BikePart::find($id);
            if (!$bikePart) {
                throw new ModelNotFoundException("Bike part with ID {$id} not found");
            }
            $data = $bikePart->toArray();
            $bikePart->delete();
            return $data;
        });

        return $bikePart;
    }
}
