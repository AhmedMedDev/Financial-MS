<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employee;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name'         => $faker->name,
        'position'     => $faker->domainWord,
        'email'        => $faker->unique()->safeEmail,
        'phone'        => $faker->numberBetween(2000,8000),
        'avatar'       => $faker->imageUrl(283,241),
        'salary'       => $faker->numberBetween(2000,8000),
        'start_date'   => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});