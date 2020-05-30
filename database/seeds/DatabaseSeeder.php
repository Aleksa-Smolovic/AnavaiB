<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogCommentSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(MovieActorSeeder::class);
        $this->call(MovieRatingSeeder::class);
        $this->call(UserDetailsSeeder::class);
    }
}
