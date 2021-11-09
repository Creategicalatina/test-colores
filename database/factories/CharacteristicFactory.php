<?php

namespace Database\Factories;

use App\Models\Characteristic;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacteristicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Characteristic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->randomElement([
                Characteristic::SANGUINEO,
                Characteristic::COLERICO,
                Characteristic::MELANCOLICO,
                Characteristic::FLEMATICO
            ]),
            'description' => $this->faker->randomElement([null, $this->faker->paragraph])
        ];
    }
}
