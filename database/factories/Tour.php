<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Tour;
use App\User;
use Faker\Generator as Faker;

$factory->define(Tour::class, function (Faker $faker) {
    return [
        'tour_title'=> $faker->word() ,
        'tour_location'=>$faker->city ,
        'starting_point'=>$faker->city ,
        'ending_point'=>$faker->city ,
        'tour_description'=>$faker->realText(150,2),
        'tour_Itinerary'=> $faker->word() ,
        'additional_infoS'=>$faker->realText(50,2),
        'tour_duration'=>$faker->date() ,
        'featured'=>$faker->word() ,
        'price'=>$faker->numberBetween(1200,20000),
        'discount'=>$faker->numberBetween(0,30),
        'status' => function(){
            $results = ['pending', 'running', 'finished', 'canceled' ];
            return $results[array_rand($results)];
        },
        'guide_id'=>function(){
            return User::all()->random();
        },
        'category_id'=>function(){
            return Category::all()->random();
        }

    ];
});
