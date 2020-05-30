<?php

use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
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
            App\Actor::create([
                
                "full_name" => 
                $faker->sentence($nbWords = 1, $variableNbWords = true),
                "slug" => 
                Str::slug($faker->sentence($nbWords = 2, $variableNbWords = true)),
                "country" => 
                $faker->sentence($nbWords = 1, $variableNbWords = true),
                "birth_date" => 
                $faker->date($format = "d/m/Y", $max = "now"),
                "image" => 'images/uploads/ceb' . $faker->numberBetween($min = 1, $max = 9) . '.jpg',
                "overview" => 
                $faker->realText($maxNbChars = 200, $indexSize = 2),
                "biography" => 
                $faker->realText($maxNbChars = 200, $indexSize = 2),
                
                "create_user_id" => 1, //$faker->numberBetween($min = 1, $max = 10),
                "created_at" => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        };
    }
}
