<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\CustomerGroup;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group1 = CustomerGroup::where('name', 'Lodz')->first();
        $group2 = CustomerGroup::where('name', 'Warszawa')->first();

        User::create([
            'name' => 'Bartosz',
            'email' => 'bartek@exis.pl',
            'password' => '1qaz@WSX',
            'customer_group_id' => $group1 ? $group1->id : null,
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Adrian',
            'email' => 'adrian@exis.pl',
            'password' => '1qaz@WSX',
            'customer_group_id' => $group2 ? $group2->id : null,
        ]);
    }
}
