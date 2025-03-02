<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();
        
        foreach ($categories as $category) {
            for ($i = 1; $i <= 5; $i++) {
                $name = $category->name . ' ' . $i;
                Product::create([
                    'name' => $name,
                    'slug' => Str::slug($name),
                    'category_id' => $category->id,
                    'description' => 'Deskripsi untuk ' . $name,
                    'price' => rand(5000, 50000),
                    'stock' => rand(10, 100),
                    'image' => 'https://via.placeholder.com/300x200',
                    'is_featured' => rand(0, 1),
                    'is_active' => 1,
                ]);
            }
        }
    }
}