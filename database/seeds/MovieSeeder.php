<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $images = ['images/uploads/mv', 'images/uploads/mv-it'];
        for($i = 0; $i < 50; $i++) {
            App\Movie::create([
                
                "title" => 
                $faker->sentence($nbWords = 3, $variableNbWords = true),
                "slug" => 
                Str::slug($faker->sentence($nbWords = 3, $variableNbWords = true)),
                "image" => $images[$faker->numberBetween($min = 0, $max = 1)] . $faker->numberBetween($min = 1, $max = 10) . '.jpg',
                "text" => 
                $faker->realText($maxNbChars = 200, $indexSize = 2),
                "trailer" => 
                $faker->sentence($nbWords = 3, $variableNbWords = true),
                'release_date' => $faker->date($format = "d/m/Y", $max = "now"),
                'run_time' => $faker->numberBetween($min = 1, $max = 5),
                "category_id" => 
                $faker->numberBetween($min = 1, $max = 10),
                
                "create_user_id" => 1, //$faker->numberBetween($min = 1, $max = 10),
                "created_at" => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        };
    }
}
