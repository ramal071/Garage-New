<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Role::class, function (Faker $faker) {

    $bool = [true,false];
    $word = ucwords($faker->word);
    return [
        'name'=> $word,
        'slug'=> Str::slug($word),
        'status'=>$bool[rand(0,1)]
        
    ];

});
