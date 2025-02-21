<?php

readonly class BikePartDto
{
    public readonly string $category_id;

    public readonly string $number;

    public readonly string $name;

    public readonly string $part;

    public readonly float $reference_price;

    public readonly string $translate;

    public function __construct(
        int $category_id,
        string $number,
        string $name,
        string $part,
        float $reference_price,
        string $translate,
    ) {
        $this->category_id = $category_id;
        $this->number = $number;
        $this->name = $name;
        $this->part = $part;
        $this->reference_price = $reference_price;
        $this->translate = $translate;
    }

    public function __get($property)
    {
        return $this->$property;
    }
}
