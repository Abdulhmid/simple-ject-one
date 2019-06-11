<?php

use Faker\Generator as Faker;


$factory->define(App\Items::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'code' => $faker->buildingNumber,
        'sell_price' => $faker->randomNumber(5),
        'buy_price' => $faker->randomNumber(5),
        'description' => $faker->paragraph
    ];
});