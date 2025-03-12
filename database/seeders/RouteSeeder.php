<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Route;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Route::create([
            'vehicle_id' => 1,
            'driver_id' => 1,
            'destination' => 'Budapest',
            'departure_time' => now()->addHours(2),
        ]);

        Route::create([
            'vehicle_id' => 2,
            'driver_id' => 2,
            'destination' => 'Debrecen',
            'departure_time' => now()->addDays(1),
        ]);

        Route::create([
            'vehicle_id' => 3,
            'driver_id' => 3,
            'destination' => 'Szeged',
            'departure_time' => now()->addHours(6),
        ]);
    }
}
