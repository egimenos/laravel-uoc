<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $authors = App\Author::pluck('id')->toArray();
    $categories = App\Category::pluck('id')->toArray();
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'body' => $faker->text($maxNbChars = 200),
        'category_id' => $faker->randomElement($categories),
        'author_id' => $faker->randomElement($authors),
    ];
});
