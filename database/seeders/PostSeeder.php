<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        foreach (range(1, 50) as $index){
            DB::table('posts')->insert(
                [
                    'title' => $faker->sentence(1),
                    'body' => $faker->paragraph(10),
                    'user_id' => User::pluck('id')->random(),
                    /*'user_id' => User::all()->random()->id,*/
                ]
            );

        }

    }
}
