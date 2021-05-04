<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Domain\Client\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    $clientType = random_int(1, 2);
    $gender = ["M", "F"];

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->e164PhoneNumber,
        'client_type' => $clientType,
        'gender' => $gender[random_int(0, 1)],
        'rg' => $faker->numberBetween(000000000000, 999999999999),
        'document' => $clientType === 1 
            ? $faker->numberBetween(00000000000, 99999999999) 
            : $faker->numberBetween(00000000000000, 99999999999999),
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
