<?php

namespace Database\Seeders;
use Database\Seeders\CategorySeeder;
use Database\Seeders\FamilySeeder;
use Database\Seeders\GroupSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\PriceSeeder;
use Database\Seeders\VariationSeeder;
use Database\Seeders\ToppingSeeder;
use Database\Seeders\ProducToppingSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            FamilySeeder::class,
            GroupSeeder::class,
            ProductSeeder::class,
            PriceSeeder::class,
            VariationSeeder::class,
            ToppingSeeder::class,
            ProducToppingSeeder::class,
        ]);
    }
}
