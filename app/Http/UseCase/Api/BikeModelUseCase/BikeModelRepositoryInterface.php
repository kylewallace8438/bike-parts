<?php
interface BikeModelRepositoryInterface
{
    public function getBikeModels(): array;
    public function getBikeModelById(int $id): array;
    public function createBikeModel(array $bikeModel): array;
    public function updateBikeModel(int $id, array $bikeModel): array;
    public function deleteBikeModel(int $id): array;
}
