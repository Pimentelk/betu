<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {
    
    $read = ($faker->boolean) ? 1 : 0;
    
    return [
        "user_id" => function() {
            return factory(App\User::class)->create()->id;
        },
        "read"      => $read,
        "title"     => $faker->sentence,
        "author"    => $faker->name,
        "learned"   => $faker->paragraph,
        "notes"     => $faker->paragraph,
        "completed" => function() use ($read) {
            return ($read) ? \Carbon\Carbon::now() : null;
        },
    ];
});
