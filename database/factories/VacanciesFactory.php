<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Vacancy::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'employer_id' => $faker->biasedNumberBetween(1, 20),
        'description' => $faker->text(50),
        'conditions' => $faker->text(150),
        'responsibilities' => $faker->text(150),
        'vacancy_address' => $faker->streetAddress,
        'wage_from' => $faker->biasedNumberBetween(10000, 50000),
        'wage_to' => $faker->biasedNumberBetween(50000, 300000),
        'payment_period' => 'В месяц',
        'without_experience' => $faker->boolean(4),
        'flexible_schedule' => $faker->boolean(4),
        'part_time' => $faker->boolean(4),
        'shift_work' => $faker->boolean(4),
        'side_work' => $faker->boolean(4),
        'available_for_minors' => $faker->boolean(4),
    ];
});
