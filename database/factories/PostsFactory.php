<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->realText($maxNbChars = 20, $indexSize = 2),
        'content'=>$faker->realText($maxNbChars = 400, $indexSize = 2),
        'author_id'=>1
    ];
});
