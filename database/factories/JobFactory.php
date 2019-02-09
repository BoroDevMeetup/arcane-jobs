<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Job::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'description' => $faker->text,
        'short_description' => $faker->text,
        'type' => 'fulltime',
        'recruiter' => false,
        'location' => $faker->city . ', ' . $faker->stateAbbr,
        'website' => $faker->url(),
        'experience_range' => '',
        'salary_range' => '',
        'remote_available' => false,
    ];
});
