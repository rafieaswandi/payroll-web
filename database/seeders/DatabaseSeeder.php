<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@komcad.com',
            'role' => 'admin',
            'password' => bcrypt('1234567890'),
        ]);

        CompanySetting::factory()->create([
            'name' => 'PT. Komcad PMC',
            'description' => 'Komcad PMC',
            'address' => 'Jakarta Kota Jakarta',
            'phone' => '085171025123',
            'value' => 'PMC',
        ]);

        // $this->call([
        //     DepartmentPositionSeeder::class,
        //     AllowanceSeeder::class,
        //     DeductionSeeder::class,
        //     TaxSeeder::class,
        // ]);
    }
}
