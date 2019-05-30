<?php

use Faker\Generator as Faker;

$factory->define(\App\CategoryVacancy::class, function (Faker $faker) {
    return [
        'category_id' => $faker->biasedNumberBetween(1, 8),
        'vacancy_id' => $faker->biasedNumberBetween(1, 40)
    ];
});
