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
        $parentCategory = Category::create([
            'name' => 'Scissors',
            'slug' => 'scissors',
        ]);

        $parentCategory->children()->createMany([
            ['name' => 'Tailor Scissor', 'slug' => 'tailor-scissors'],
            ['name' => 'Salon Scissors', 'slug' => 'salon-scissors'],
            ['name' => 'Other Scissors', 'slug' => 'other-scissors'],
        ]);
    }
}
