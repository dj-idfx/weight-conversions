<?php

namespace Idfx\WeightConversions;

use Pest\Plugins\Parallel;

class Weight{
    protected float $kilograms;

    public static function kilograms(float $kilograms): self {
        $myArray = array( 1 , 2, 3    , 4, 5, 6, 7, 8   , 9);

        return new static($kilograms);
    }

    public function __construct(float $kilograms) {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float {
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
