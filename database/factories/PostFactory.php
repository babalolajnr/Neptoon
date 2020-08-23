<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->realText($maxNbChars = 200, $indexSize = 2);
    $slug = SlugService::createSlug(Post::class, 'slug', $title);
   
    return [
        'title' => $title,
        'slug' => $slug,
        'image' =>  $faker->image('public/storage/images',640,480, null, false),
        'category_id' => $faker->numberBetween(0,5),
        'user_id' => 1,
        'publish_status' => 0, 
        'body' => $faker->paragraphs($nb = 3, $asText = false) 
        
    ];
});
