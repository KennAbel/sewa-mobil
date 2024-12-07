<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'car_plate' => 'B 5634 UH',
            'car_model' => 'Toyota Corolla',
            'car_status' => 'available',
            'rent_price_per_day' => 500000,
            'rent_price_per_hour' => 50000,
        ]);

        Car::create([
            'car_plate' => 'AD 9129 CH',
            'car_model' => 'Honda Civic',
            'car_status' => 'rented',
            'rent_price_per_day' => 600000,
            'rent_price_per_hour' => 6000,
        ]);

        Car::create([
            'car_plate' => 'H 6237 WE',
            'car_model' => 'Ford Focus',
            'car_status' => 'available',
            'rent_price_per_day' => 550000,
            'rent_price_per_hour' => 55000,
        ]);
    }
}
