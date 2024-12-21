<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add sample products to the database
        $products = [
            [
                'name' => 'Strong Scissor',
                'slug' => Str::slug('Strong Scissor'),
                'description' => 'High-quality Tailor Strong Scissor',
                'price' => 99.99,
                'quantity' => 50,
                'category_id' => 1, // Ensure category_id exists in categories table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crown Scissor',
                'slug' => Str::slug('Crown Scissor'),
                'description' => 'High-quality Tailor Crown Scissor',
                'price' => 99.99,
                'quantity' => 50,
                'category_id' => 1, // Ensure category_id exists in categories table
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert products into the database
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}