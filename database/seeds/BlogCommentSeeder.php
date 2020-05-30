<?php

use Illuminate\Database\Seeder;

class BlogCommentSeeder extends Seeder
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
            App\BlogComment::create([
                "text" => 
                $faker->realText($maxNbChars = 200, $indexSize = 2),
                "blog_id" => $faker->numberBetween($min = 1, $max = 10),
                "create_user_id" => 1, //$faker->numberBetween($min = 1, $max = 10),
                "created_at" => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        };
    }
}
