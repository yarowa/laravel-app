<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;



$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'         =>  rtrim($faker->sentence(rand(8, 12)), '.'),
        'excerpt'       =>  $faker->text(rand(250, 300)),
        'body'          =>  $faker->paragraphs(rand(10, 15), true),
        'image'         =>  $faker->image('public/storage/images', 640, 480, null, false),
        'views'         =>  rand(1, 10) * 10,
        'category_id'   =>  rand(1, 5),
        'created_at'    =>  \Carbon\Carbon::now(),
        'updated_at'    =>  \Carbon\Carbon::now(),
        'published_at'  => \Carbon\Carbon::now()
    ];
});
