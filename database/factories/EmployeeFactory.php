<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {

    return [
         'name'=>$faker->name,
         'nick_name'=> $faker->name,
         'phone'=>$faker->phoneNumber,
         'address'=>$faker->word,
         'emp_image'=>'emp.png',
         'id_front'=>'id.png',
         'id_back'=>'id_back.png'
    ];
});
