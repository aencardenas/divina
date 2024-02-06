<?php

namespace Database\Seeders;

use App\Models\Family;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Family::create(['family' => 'SANDWICHON', 'category_id' => 1]);
        Family::create(['family' => 'PAY DANES', 'category_id' => 1]);
        Family::create(['family' => 'PASTAS', 'category_id' => 1]);
        Family::create(['family' => 'LASAGNA', 'category_id' => 1]);
        Family::create(['family' => 'PIB', 'category_id' => 1]);
        Family::create(['family' => 'CHILE EN NOGADA', 'category_id' => 1]);
        Family::create(['family' => 'PIERNAS', 'category_id' => 1]);
        Family::create(['family' => 'TARTAS', 'category_id' => 2]);
        Family::create(['family' => 'PASTELES', 'category_id' => 2]);
        Family::create(['family' => 'CHEESECAKE', 'category_id' => 2]);
        Family::create(['family' => 'CUPCAKE', 'category_id' => 2]);
        Family::create(['family' => 'BROWNIES', 'category_id' => 2]);
        Family::create(['family' => 'GALLETAS', 'category_id' => 2]);
        Family::create(['family' => 'PAY DE QUESO', 'category_id' => 2]);
        Family::create(['family' => 'CAFE', 'category_id' => 3]);
        Family::create(['family' => 'AGUA', 'category_id' => 3]);
        Family::create(['family' => 'REFRESCOS', 'category_id' => 3]);
        Family::create(['family' => 'FRAPPES', 'category_id' => 3]);
        Family::create(['family' => 'PASTELES', 'category_id' => 4]);
        Family::create(['family' => 'SNACKS', 'category_id' => 4]);
    }
}
