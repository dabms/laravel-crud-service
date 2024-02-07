<?php

namespace Database\Seeders;

use App\Models\Temperatures;
use Database\Factories\TemperaturesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemperaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Temperatures::factory()->count(5)->create();
    }
}
