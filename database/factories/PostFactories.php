<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker -> sentence(),
        'content' => $faker ->paragraph(rand(2,80),true)


    ];
});
