<?php
use Faker\Generator as Faker;
use App\Models\Gender;

$factory->define(App\Models\Student::class,function(Faker $faker){
    return[
        "reg_no"=>$faker->numberBetween(100000,500000),
        "gender_id"=>Gender::all()->random()->id,
        "name"=>$faker->name,
        "email"=>$faker->unique()->safeEmail,
        "roll_no"=>$faker->numberBetween(1,50),
        "phone_no"=>$faker->phoneNumber,
        "address"=>$faker->address,
        "gurdian_name"=>$faker->name("male"),
        "age"=>$faker->numberBetween(18,25)
    ];

});