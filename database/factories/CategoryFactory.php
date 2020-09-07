<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => function(){
            $results = ['Adventure', 'city tour' , 'honeymoon' , 'cultural' ];
            return $results[array_rand($results)];
        },
    ];
});
