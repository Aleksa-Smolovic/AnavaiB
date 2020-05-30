<?php

use Illuminate\Database\Seeder;

class MovieRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 20; $i++) {
            App\MovieRating::create([
                "rating" => $faker->numberBetween($min = 1, $max = 5),
                "movie_id" => $faker->numberBetween($min = 1, $max = 20),
                "title" => $faker->sentence($nbWords = 3, $variableNbWords = true),
                "text" => $faker->realText($maxNbChars = 200, $indexSize = 2),
                "create_user_id" => 1, 
                "created_at" => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        };
    }
}
