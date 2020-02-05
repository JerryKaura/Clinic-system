<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'id_number' => $faker->randomDigitNotNull,
        'bloodgroup' => $faker->word,
        'gender' => $faker->word,
        'phone' => $faker->word,
        'email' => $faker->word,
        'dob' => $faker->word,
        'address' => $faker->text,
        'guardian' => $faker->word,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
