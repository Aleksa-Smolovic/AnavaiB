<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
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
            App\Blog::create([
                
                "title" => 
                $faker->sentence($nbWords = 3, $variableNbWords = true),
                "slug" => 
                Str::slug($faker->sentence($nbWords = 3, $variableNbWords = true)),
                "image" => 
                $faker->imageUrl($width = 640, $height = 480),
                "text" => 
                $faker->realText($maxNbChars = 200, $indexSize = 2),
                
                "create_user_id" => 1, //$faker->numberBetween($min = 1, $max = 10),
                "created_at" => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        };
    }
}
