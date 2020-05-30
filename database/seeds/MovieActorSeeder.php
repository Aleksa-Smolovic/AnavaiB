<?php

use Illuminate\Database\Seeder;

class MovieActorSeeder extends Seeder
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
            App\MovieActor::create([
                "character" => 
                $faker->sentence($nbWords = 1, $variableNbWords = true),
                "movie_id" => $faker->numberBetween($min = 1, $max = 20),
                "actor_id" => $faker->numberBetween($min = 1, $max = 20),
                "create_user_id" => 1, 
                "created_at" => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        };
    }
}
