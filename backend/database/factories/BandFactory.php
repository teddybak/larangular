<?php

namespace Database\Factories;

use App\Models\Band;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Band::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence
        ];
    }
}
