<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['category' => 'ALIMENTOS']);
        Category::create(['category' => 'POSTRES']);
        Category::create(['category' => 'BEBIDAS']);
        Category::create(['category' => 'MASCOTAS']);
    }
}
