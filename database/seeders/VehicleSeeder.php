<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Vehicle::create([
            'make' => 'Toyota',
            'model' => 'Corolla',
            'year' => 2020,
            'license_plate' => 'ABC-123',
        ]);

        Vehicle::create([
            'make' => 'Ford',
            'model' => 'Focus',
            'year' => 2018,
            'license_plate' => 'XYZ-789',
        ]);

        Vehicle::create([
            'make' => 'Tesla',
            'model' => 'Model 3',
            'year' => 2022,
            'license_plate' => 'TES-456',
        ]);
    }
}
