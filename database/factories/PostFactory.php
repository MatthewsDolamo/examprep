<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->sentence(1),
            'body' => $this->faker->paragraph(2),
           /* 'user_id' => User::pluck('id')->random(),*/
            'user_id' => User::all()->random()->id,
        ];
    }
}
