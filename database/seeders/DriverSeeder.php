<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Driver::create([
            'name' => 'Kovács Péter',
            'email' => 'peter.kovacs@example.com',
            'phone' => '06301234567',
        ]);

        Driver::create([
            'name' => 'Szabó Anna',
            'email' => 'anna.szabo@example.com',
            'phone' => '06309876543',
        ]);

        Driver::create([
            'name' => 'Nagy István',
            'email' => 'istvan.nagy@example.com',
            'phone' => '06301112222',
        ]);
    }
}
