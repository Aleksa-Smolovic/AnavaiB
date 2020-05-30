<?php

use Illuminate\Database\Seeder;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 1; $i++) {
            App\UserDetails::create([
                "first_name" => 
                $faker->sentence($nbWords = 2, $variableNbWords = true),
                "last_name" => $faker->sentence($nbWords = 2, $variableNbWords = true),
                "image" => 'images/uploads/user-img.png',
                "user_id" => 1, 
                "created_at" => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        };
    }
}
