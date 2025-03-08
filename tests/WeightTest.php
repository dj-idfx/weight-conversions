<?php

use Idfx\WeightConversions\Weight;

it('can convert kilograms to grams correctly', function () {
    $grams = Weight::kilograms(1)->toGrams();

    expect($grams)->toEqual(1000);
});

it('can convert kilograms to pounds correctly', function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.462);
});

it('can convert kilograms to ounces correctly', function () {
    $ounces = Weight::kilograms(100)->toOunces();

    expect($ounces)->toEqual(3527.396);
});

it('can convert kilograms to stones correctly', function () {
    $stones = Weight::kilograms(100)->toStones();

    expect($stones)->toEqual(15.747);
});
