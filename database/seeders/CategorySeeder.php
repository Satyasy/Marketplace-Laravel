<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Makanan',
                'icon' => 'fas fa-utensils',
            ],
            [
                'name' => 'Minuman',
                'icon' => 'fas fa-coffee',
            ],
            [
                'name' => 'Sayuran',
                'icon' => 'fas fa-carrot',
            ],
            [
                'name' => 'Snack',
                'icon' => 'fas fa-cookie',
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'icon' => $category['icon'],
                'description' => 'Kategori untuk ' . strtolower($category['name']),
            ]);
        }
    }
}