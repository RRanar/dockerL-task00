<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChargingStation;

class ChargingStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChargingStation::factory()
                ->times(10)
                ->create();
    }
}
