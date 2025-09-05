<?php

namespace Database\Seeders;

use App\Models\Rumahsakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahsakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rumahsakit::factory()->count(10)->create();
    }
}
