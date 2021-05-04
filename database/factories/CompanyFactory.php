<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Domain\Company\Models\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'company_name' => $faker->name,
        'fantasy' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
