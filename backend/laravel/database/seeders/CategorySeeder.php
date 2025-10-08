<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Usługi dla firm',
            'description' => 'Opis',
        ]);
        Category::create([
            'name' => 'Usługi dla użytkowników indywidualnych',
            'description' => 'Opis',
        ]);
        Category::create([
            'name' => 'Usługi online i cyfrowe',
            'description' => 'Opis',
        ]);
        Category::create([
            'name' => 'Gadżety i urządzenia z serwisem',
            'description' => 'Opis',
        ]);
    }
}
