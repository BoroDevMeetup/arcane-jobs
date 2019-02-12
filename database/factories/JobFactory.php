<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Job::class, function (Faker $faker) {

    $jobTypes = App\Models\Job::jobTypes();

    $randomJob = rand(0, (count($jobTypes)-1));

    return [
        'title' => $faker->jobTitle,
        'description' => $faker->text,
        'short_description' => $faker->text,
        'type' => $jobTypes[$randomJob],
        'recruiter' => false,
        'location' => $faker->city . ', ' . $faker->stateAbbr,
        'website' => $faker->url(),
        'experience_range' => '',
        'salary_range' => '',
        'remote_available' => false,
    ];
});
