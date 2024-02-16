<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topping;

class ToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topping::create(['topping' => 'Merengue', 'variation_id' => 1]);
        Topping::create(['topping' => 'Frutas', 'variation_id' => 2]);
        Topping::create(['topping' => 'Chantilly', 'variation_id' => 1]);
        Topping::create(['topping' => 'Crumblee', 'variation_id' => 3]);
        Topping::create(['topping' => 'Buttercream', 'variation_id' => 2]);
        Topping::create(['topping' => 'Fondant', 'variation_id' => 1]);
        Topping::create(['topping' => 'Desnudo', 'variation_id' => 1]);
        Topping::create(['topping' => 'Chantilly con fresas', 'variation_id' => 3]);
        Topping::create(['topping' => 'Chantilly con frambuesa', 'variation_id' => 3]);
        Topping::create(['topping' => 'Chantilly con mango', 'variation_id' => 3]);
        Topping::create(['topping' => 'Chantilly con oreo', 'variation_id' => 3]);
        Topping::create(['topping' => 'Cubierta de ganache', 'variation_id' => 1]);
        Topping::create(['topping' => 'Dulce de leche', 'variation_id' => 2]);
        Topping::create(['topping' => 'Royal icing', 'variation_id' => 1]);
        Topping::create(['topping' => 'Mermelada', 'variation_id' => 1]);
        Topping::create(['topping' => 'Sin chicharos', 'variation_id' => 5]);
        Topping::create(['topping' => 'Fetuccini', 'variation_id' => 4]);
        Topping::create(['topping' => 'Spaghetti', 'variation_id' => 4]);
        Topping::create(['topping' => 'Penne', 'variation_id' => 4]);
        Topping::create(['topping' => 'Fusili', 'variation_id' => 4]);
        Topping::create(['topping' => 'Codito', 'variation_id' => 4]);
        Topping::create(['topping' => 'Pasta artesanal', 'variation_id' => 4]);
        Topping::create(['topping' => 'Pasta precocida', 'variation_id' => 4]);
        Topping::create(['topping' => 'Costilla', 'variation_id' => 5]);
        Topping::create(['topping' => 'Queso', 'variation_id' => 5]);
        Topping::create(['topping' => 'Huevos', 'variation_id' => 5]);
        Topping::create(['topping' => 'Pollo', 'variation_id' => 5]);
        Topping::create(['topping' => 'Crema cacahuate', 'variation_id' => 5]);
        Topping::create(['topping' => 'Mozzarella', 'variation_id' => 5]);
        Topping::create(['topping' => 'Leche almendras', 'variation_id' => 6]);
        Topping::create(['topping' => 'Leche almendras', 'variation_id' => 6]);
        Topping::create(['topping' => 'Leche deslactosada', 'variation_id' => 6]);
        Topping::create(['topping' => 'Leche entera', 'variation_id' => 6]);
        Topping::create(['topping' => 'Leche light', 'variation_id' => 6]);
        Topping::create(['topping' => 'Leche arroz  ', 'variation_id' => 6]);


    }
}
