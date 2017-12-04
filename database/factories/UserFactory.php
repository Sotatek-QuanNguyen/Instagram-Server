<?php
$factory->defineAs(App\User::class, 'normal', function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'username' => $faker->userName,
        'website' => $faker->url,
        'bio' => $faker->address,
        'phone_number' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'profilePicture' => $faker->imageUrl(),
        'gender' => $faker->randomElement(['male', 'female']),
    ];
});