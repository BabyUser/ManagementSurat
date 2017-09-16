<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\siswa::class, function (Faker\Generator $faker) {
    static $password;
    $kel =$faker->randomElement($array = array ('male', 'female'));
    $grade =$faker->randomElement($array = array ('X RPL 1', 'X RPL 2', 'XI RPL 1', 'XI RPL 2', 'XII RPL 1', 'XII RPL 2'));
    return [
      'nis' => $faker->numberBetween($min = 1000, $max = 9000),
      'name' => $faker->name($gender = $kel),
      'grade' => $grade,
      'gender' => $gender,
      'address' => $faker->address,

    ];
});
