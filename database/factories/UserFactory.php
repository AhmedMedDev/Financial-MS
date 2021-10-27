<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Children;
use App\Models\Employee;
use App\User;
// use Faker\Generator as Faker;
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

$faker = Faker\Factory::create('ar_JO');

$factory->define(Employee::class, function ($faker) {
    return [
        'name'                  => $faker->name,
        'position'              => "اخصائى",
        'email'                 => $faker->unique()->safeEmail,
        'phone'                 => $faker->e164PhoneNumber(),
        'salary'                => $faker->numberBetween(2000,8000),
        'start_date'            => $faker->date($format = 'Y-m-d', $max = 'now'),
        'qualification'         => $faker->randomElement(array ('ليسانس اداب وتربيه قسم علم نفس','بكالوريوس تربية ')),
        'date_of_birth'         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'national_id'           => $faker->isbn10(),
        'address'               => $faker->address,
        'religion'              => $faker->randomElement(array ('مسلم','مسيحى')),
    ];
});

$factory->define(Children::class, function ($faker) {
    return [
        'child_name'            => $faker->firstName,
        'parent'                => $faker->name,
        'phone'                 => $faker->e164PhoneNumber(),
        'date'                  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_of_birth'         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gender'                => $faker->randomElement(array ('ذكر','انثى')),
        'nationality'           => $faker->randomElement(array ('مصرى','ليبى','كويتى')),
        'religion'              => $faker->randomElement(array ('مسلم','مسيحى')),
        'num_of_bro'            => $faker->numberBetween(0,6),
        'rank_of_bro'           => $faker->numberBetween(1,6),
        'address'               => $faker->address,
        'national_id'           => $faker->isbn10(),
    ];
});