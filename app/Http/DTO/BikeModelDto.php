<?php

readonly class BikeModelDto
{
    public readonly string $name;

    public readonly string $brand;

    public readonly string $type;

    public readonly string $color;

    public readonly string $size;

    public readonly float $price;

    public readonly string $description;

    public readonly string $image;

    public function __construct(
        string $name,
        string $brand,
        string $type,
        string $color,
        string $size,
        float $price,
        string $description,
        string $image,
    ) {
        $this->name = $name;
        $this->brand = $brand;
        $this->type = $type;
        $this->color = $color;
        $this->size = $size;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
    }

    public function __get($property)
    {
        return $this->$property;
    }
}
