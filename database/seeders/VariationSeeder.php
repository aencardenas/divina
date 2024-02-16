<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Variation;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Variation::create(['variation' => 'Cubierta']);
        Variation::create(['variation' => 'Relleno']);
        Variation::create(['variation' => 'Decorado']);
        Variation::create(['variation' => 'Tipo de pasta']);
        Variation::create(['variation' => 'Ingredientes']);
        Variation::create(['variation' => 'Tipo de leche']);
    }
}
