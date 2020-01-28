<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Organization;
use Faker\Generator as Faker;

$factory->define(Organization::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'description' => $faker->text,
        'contact_details' => $faker->text,
        'city' => $faker->word,
        'state' => $faker->word,
        'country' => $faker->word,
        'country_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
