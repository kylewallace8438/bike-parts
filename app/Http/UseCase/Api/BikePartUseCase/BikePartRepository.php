<?php

use App\Models\BikePart;

class BikePartRepository implements BikePartRepositoryInterface
{
    public function getBikeParts(): array
    {
        return BikePart::all()->toArray();
    }

    public function getBikePartById(int $id): array
    {
        return BikePart::find($id)->toArray();
    }

    public function createBikePart(array $bikePart): array
    {
        return BikePart::create($bikePart)->toArray();
    }

    public function updateBikePart(int $id, array $bikePart): array
    {
        BikePart::find($id)->update($bikePart);

        return BikePart::find($id)->toArray();
    }

    public function deleteBikePart(int $id): array
    {
        $bikePart = BikePart::find($id)->toArray();
        BikePart::destroy($id);

        return $bikePart;
    }
}
