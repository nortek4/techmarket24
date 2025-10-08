<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CustomerGroup;

class CustomerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerGroup::create([
            'name' => 'Lodz',
            'description' => 'Klienci z Łodzi',
        ]);
        CustomerGroup::create([
            'name' => 'Warszawa',
            'description' => 'Klienci z Warszawy',
        ]);
    }
}
