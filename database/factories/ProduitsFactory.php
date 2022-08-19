<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->sentence(),
            'description'=>$this->faker->sentence(rand(1,3),true),
            'image'=>$this->faker->imageUrl(),
            'prix'=>rand(1000,15000),
            'active'=>$this->faker->boolean(80)
        ];
    }
}
