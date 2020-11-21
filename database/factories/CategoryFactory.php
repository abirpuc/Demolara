<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        	
		'name' => $faker->categoryName,
		'brand' => $faker->BrandName,
		'quantity' => $faker->randomDigit,
		'total_selles' => $faker->randomDigit,
    ];
});
