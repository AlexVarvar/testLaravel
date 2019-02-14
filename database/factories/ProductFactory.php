<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->title,
        'price' => $faker->randomFloat(),
        'amount_stock' => $faker->randomDigit,
        'category_id' => $faker->randomDigit,
        'amount_ratings' => $faker->randomDigit,
    ];
});
