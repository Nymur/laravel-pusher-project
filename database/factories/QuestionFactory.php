<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Question;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\User;
use App\Model\Category;


$factory->define(Question::class, function (Faker $faker) {
    return [
        "title" =>$faker->sentence,
        "slug" => Str::slug($faker->sentence,'-'),
        "body" => $faker->text,
        "category_id"=> function(){
        	return Category::all()->random();
        },
        "user_id" => function(){
        	return User::all()->random();
        }
    ];
});
