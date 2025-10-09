<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category1 = Category::where('name', 'Usługi dla firm')->first();
        $category2 = Category::where('name', 'Usługi dla użytkowników indywidualnych')->first();
        $category3 = Category::where('name', 'Usługi online i cyfrowe')->first();
        $category4 = Category::where('name', 'Gadżety i urządzenia z serwisem')->first();

        Product::create([
            'name' => 'Audyt IT i bezpieczeństwa',
            'description' => 'Analiza infrastruktury sieciowej, ocena zagrożeń i rekomendacje zabezpieczeń.',
            'price' => 102,
            'category_id' => $category1 ? $category1->id : null,
            'image_url' => '/public/img/pro2.jpg',
        ]);
        Product::create([
            'name' => 'Naprawa i modernizacja komputerów',
            'description' => 'Wymiana podzespołów, przyspieszanie działania, reinstalacja systemu.',
            'price' => 149.58,
            'category_id' => $category2 ? $category2->id : null,
            'image_url' => '/public/img/pro2.jpg',
        ]);
        Product::create([
            'name' => 'Tworzenie i utrzymanie stron WWW',
            'description' => 'Projektowanie responsywnych witryn, optymalizacja SEO, hosting i wsparcie techniczne.',
            'price' => 254.99,
            'category_id' => $category3 ? $category3->id : null,
            'image_url' => '/public/img/pro2.jpg',
        ]);
        Product::create([
            'name' => 'Wypożyczalnia sprzętu technologicznego',
            'description' => 'Laptopy, tablety, projektory na określony czas z pełnym wsparciem technicznym.',
            'price' => 499.99,
            'category_id' => $category4 ? $category4->id : null,
            'image_url' => '/public/img/pro2.jpg',
        ]);
    }
}
