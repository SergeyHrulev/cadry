<?php

use Faker\Generator as Faker;

$factory->define(App\Employer::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' =>$faker->text(150),
        'site' => 'http::/site.com',
        'phone' => $faker->phoneNumber,
        'additional_phone' => $faker->phoneNumber,
        'active_phone' => $faker->biasedNumberBetween(1, 2),
        'city_id' => $faker->biasedNumberBetween(1, 10),
    ];
});
