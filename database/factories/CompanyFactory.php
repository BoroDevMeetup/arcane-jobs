<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'location' => $faker->city . ', ' . $faker->stateAbbr,
        'size' => $faker->randomNumber(),
        'banner' => $faker->imageUrl(),
        'picture' => $faker->imageUrl(),
        'facebook' => '',
        'twitter' => '',
        'github' => '',
        'linkedin' => '',
        'description' => $faker->text(),
        'short_description' => $faker->text(),
    ];
});
