<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Domain\Client\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->e164PhoneNumber,
        'client_type' => '1',
        'gender' => 'M',
        'rg' => Str::random(12),
        'document' => Str::random(11),
        'cep'  => $faker->postcode,
        'country' => $faker->country,
        'state' => $faker->state,
        'city' => $faker->city,
        'district' => $faker->streetName,
        'place' => $faker->streetAddress,
        'number' => $faker->buildingNumber,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
