<?php

namespace App\UseCase\Api\BikePartUseCase;

interface BikePartStoreRepositoryInterface
{
    public function handle(array $bikePart): array;
}
