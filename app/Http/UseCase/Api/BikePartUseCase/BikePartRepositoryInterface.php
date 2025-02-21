<?php
namespace App\Http\UseCase\Api\BikePartUseCase;

interface BikePartRepositoryInterface
{
    public function getBikeParts(): array;

    public function getBikePartById(int $id): array;

    public function createBikePart(array $bikePart): array;

    public function updateBikePart(int $id, array $bikePart): array;

    public function deleteBikePart(int $id): array;
}
