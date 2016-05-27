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

$factory->define(Turismo\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('secret'),
        'role' =>$faker->randomElement(['user','hotelero']),
        'remember_token' => str_random(10)
        
    ];
});



$factory->define(Turismo\hotel::class, function (Faker\Generator $faker) {
    return [
        'name'  => $faker->name,
        'email' => $faker->email,
        'details'=> $faker->sentence(3),
        'phone' => $faker->PhoneNumber,
        'address'=>$faker->Address,
        'website'=>$faker->url,
        'image'=>$faker->randomElement(['hotel.jpg','hotel.jpg']), 
        'user_id'=>rand(1,9),

    ];
});



$factory->define(Turismo\room::class, function (Faker\Generator $faker) {
    return [
        'type'      => $faker->randomElement(['Cama Doble para parejas','Sencilla','','Con dos camas sencillas']),
        'numPerson' => rand(1,3),
        'cantidad' => rand(1,3),
        'numBed'    => rand(1,2),
        'price'     => rand(25000,80000),
        'extra'     =>$faker->words(4, true),
        
        'image'     =>$faker->randomElement(['foto1.jpg','foto1.jpg']),
        'hotel_id'  =>rand(1,9),

    ];
});

$factory->define(Turismo\message::class, function (Faker\Generator $faker) {
    return [
        'name'  => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->PhoneNumber,
        'matter'=>$faker->words(2, true),
        'message'=>$faker->words(5, true),
        'hotel_id'  =>rand(1,9),

    ];
});

$factory->define(Turismo\hotel_user::class, function (Faker\Generator $faker) {
    return [
        'user_id'   =>rand(1,9),
        'hotel_id'  =>rand(1,9),

    ];
});

$factory->define(Turismo\comment::class, function (Faker\Generator $faker) {
    return [
        'user_id'   =>rand(1,9),
        'hotel_id'  =>rand(1,9),
        'comment'   =>$faker->paragraph(2, true)

    ];
});


