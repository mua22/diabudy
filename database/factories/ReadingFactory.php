<?php

use Faker\Generator as Faker;

$factory->define(App\Reading::class, function (Faker $faker) {
    return [
        'reading'=>rand(100,225),
        'sugar_category_id'=>rand(1,8),
        'record_time'=>\Carbon\Carbon::now()->subDays(rand(1,30)),
    ];
});
