<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductTopping;

class ProducToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tarquesita
        ProductTopping::create(['product_id' => 1, 'topping_id' => 1]);
        ProductTopping::create(['product_id' => 1, 'topping_id' => 2]);
        ProductTopping::create(['product_id' => 1, 'topping_id' => 3]);
        ProductTopping::create(['product_id' => 2, 'topping_id' => 1]);
        ProductTopping::create(['product_id' => 2, 'topping_id' => 2]);
        ProductTopping::create(['product_id' => 2, 'topping_id' => 3]);
        ProductTopping::create(['product_id' => 3, 'topping_id' => 1]);
        ProductTopping::create(['product_id' => 3, 'topping_id' => 2]);
        ProductTopping::create(['product_id' => 3, 'topping_id' => 3]);

        //Tarta de chocolate
        ProductTopping::create(['product_id' => 4, 'topping_id' => 1]);
        ProductTopping::create(['product_id' => 4, 'topping_id' => 2]);
        ProductTopping::create(['product_id' => 4, 'topping_id' => 3]);
        ProductTopping::create(['product_id' => 5, 'topping_id' => 1]);
        ProductTopping::create(['product_id' => 5, 'topping_id' => 2]);
        ProductTopping::create(['product_id' => 5, 'topping_id' => 3]);

        // Tarta de nuez
        ProductTopping::create(['product_id' => 6, 'topping_id' => 1]);
        ProductTopping::create(['product_id' => 6, 'topping_id' => 2]);
        ProductTopping::create(['product_id' => 6, 'topping_id' => 3]);
        ProductTopping::create(['product_id' => 7, 'topping_id' => 1]);
        ProductTopping::create(['product_id' => 7, 'topping_id' => 2]);
        ProductTopping::create(['product_id' => 7, 'topping_id' => 3]);
        ProductTopping::create(['product_id' => 8, 'topping_id' => 1]);
        ProductTopping::create(['product_id' => 8, 'topping_id' => 2]);
        ProductTopping::create(['product_id' => 8, 'topping_id' => 3]);
    }
}
