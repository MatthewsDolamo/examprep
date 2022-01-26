<?php

namespace Database\Seeders;

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

        /**
         * Each user will have 10 posts
         */
        \App\Models\User::factory(10)->hasPosts(10)->create();

        /**
         * Run the seeder wby factory
         */
        /*\App\Models\User::factory(10)->create();
         \App\Models\Post::factory(50)->create();*/

        /**
         * Directly run the seeder
         */
        /* $this->call([
            PostSeeder::class,
        ]);*/

    }
}
