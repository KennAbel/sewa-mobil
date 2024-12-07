<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(4)->create();

        \App\Models\User::factory()->create([
            'name' => 'Citra',
            'email' => 'citra@thunderbird.com',
            'user_role' => 'Regular User',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Dimas',
            'email' => 'dimas@thunderbird.com',
            'user_role' => 'Regular User',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Satria',
            'email' => 'satria@thunderbird.com',
            'user_role' => 'Admin',
        ]);

        \App\Models\User\Automobile::factory()->create([
            'automobile_ID' => '010',
            'automobile_year' => '1983',
            'automobile_marque' => 'Honda',
            'automobile_model_name' => 'CRX',
            'automobile_code' => 'EC1',
            'automobile_transmission' => 'Manual',
            'automobile_status' => 'Active',
            'rentperday' => '100000',
            'rentperhour' => '10000',
            'Actions' => '',
        ]);

        \App\Models\User\Automobile::factory()->create([
            'automobile_ID' => '010',
            'automobile_year' => '1983',
            'automobile_marque' => 'Porsche',
            'automobile_model_name' => '911 Turbo',
            'automobile_code' => '930',
            'automobile_transmission' => 'Manual',
            'automobile_status' => 'Active',
            'rentperday' => '500000',
            'rentperhour' => '50000',
            'Actions' => '',
        ]);
    }
}
