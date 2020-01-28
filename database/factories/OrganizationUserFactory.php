<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrganizationUser;
use Faker\Generator as Faker;

$factory->define(OrganizationUser::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'organization_id' => $faker->randomDigitNotNull,
        'start_date' => $faker->word,
        'end_date' => $faker->word,
        'role' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
