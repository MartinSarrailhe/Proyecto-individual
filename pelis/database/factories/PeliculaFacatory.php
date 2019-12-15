<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pelicula;
use Faker\Generator as Faker;

$factory->define(Pelicula::class, function (Faker $faker) {

    $path = storage_path('app/public/peliculas');

    return [
      'name' => $faker->sentence(3),
      'description' => $faker->paragraph(3),
      'rating' => $faker->randomFloat(2, 2, 8),
      'user_id' => $faker->numberBetween(1,5),
      'featured_img' => $faker->image($path, 300, 300, 'technics', false)
    ];
});
