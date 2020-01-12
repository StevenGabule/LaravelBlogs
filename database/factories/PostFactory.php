<?php

use Faker\Generator as Faker;

/** @var  $factory */
$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'slug' => str_slug()
    ];
});
