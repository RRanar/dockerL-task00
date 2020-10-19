<?php

namespace Database\Factories;

use App\Models\ChargingStation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChargingStationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChargingStation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stat_name' => $this->faker->company,
            'stat_city' => $this->faker->city,
            'stat_opent' => $this->faker->time('H:i:s','12:00:00'),
            'stat_clost' => $this->faker->time('H:i:s', '22:00:00'),
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime
        ];
    }
}
