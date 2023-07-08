<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'AutorId'=>User::all()->random()->id,
            'nombreDelBlog'=>$this->faker->word(),
            'contenidoBlog' => $this->faker->text(600),
            'fecha'=>$this->faker->dateTime()
        ];
    }
}
