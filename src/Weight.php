<?php

namespace Idfx\WeightConversions;

class Weight
{
    protected float $kilograms;

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.20462;
    }

    public function toOunces(): float
    {
        return $this->kilograms * 35.27396;
    }

    public function toStones(): float
    {
        return $this->kilograms * 0.15747;
    }
}
