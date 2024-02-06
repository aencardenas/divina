<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TARTAS
        Price::create(['product_id' => 1, 'price' => 75.00]);
        Price::create(['product_id' => 2, 'price' => 250.00]);
        Price::create(['product_id' => 3, 'price' => 450.00]);
        Price::create(['product_id' => 4, 'price' => 75.00]);
        Price::create(['product_id' => 5, 'price' => 250.00]);
        Price::create(['product_id' => 6, 'price' => 75.00]);
        Price::create(['product_id' => 7, 'price' => 250.00]);
        Price::create(['product_id' => 8, 'price' => 450.00]);
        Price::create(['product_id' => 9, 'price' => 65.00]);
        Price::create(['product_id' => 10, 'price' => 230.00]);
        Price::create(['product_id' => 11, 'price' => 370.00]);
        Price::create(['product_id' => 12, 'price' => 65.00]);
        Price::create(['product_id' => 13, 'price' => 230.00]);
        Price::create(['product_id' => 14, 'price' => 370.00]);
        Price::create(['product_id' => 15, 'price' => 65.00]);
        Price::create(['product_id' => 16, 'price' => 230.00]);
        Price::create(['product_id' => 17, 'price' => 370.00]);
        Price::create(['product_id' => 18, 'price' => 65.00]);
        Price::create(['product_id' => 19, 'price' => 230.00]);
        Price::create(['product_id' => 20, 'price' => 370.00]);
        Price::create(['product_id' => 21, 'price' => 65.00]);
        Price::create(['product_id' => 22, 'price' => 230.00]);
        Price::create(['product_id' => 23, 'price' => 370.00]);

        // PASTELES
        Price::create(['product_id' => 24, 'price' => 330.00]);
        Price::create(['product_id' => 25, 'price' => 450.00]);
        Price::create(['product_id' => 26, 'price' => 450.00]);
        Price::create(['product_id' => 27, 'price' => 250.00]);
        Price::create(['product_id' => 28, 'price' => 35.00]);
        Price::create(['product_id' => 29, 'price' => 330.00]);
        Price::create(['product_id' => 30, 'price' => 75.00]);
        Price::create(['product_id' => 31, 'price' => 32.00]);
        Price::create(['product_id' => 32, 'price' => 380.00]);
        Price::create(['product_id' => 33, 'price' => 380.00]);
        Price::create(['product_id' => 34, 'price' => 380.00]);
        Price::create(['product_id' => 35, 'price' => 35.00]);
        Price::create(['product_id' => 36, 'price' => 380.00]);
        Price::create(['product_id' => 37, 'price' => 380.00]);
        Price::create(['product_id' => 38, 'price' => 35.00]);
        Price::create(['product_id' => 39, 'price' => 480.00]);
        Price::create(['product_id' => 40, 'price' => 350.00]);
        Price::create(['product_id' => 41, 'price' => 350.00]);
        Price::create(['product_id' => 42, 'price' => 35.00]);
        Price::create(['product_id' => 43, 'price' => 380.00]);
        Price::create(['product_id' => 44, 'price' => 380.00]);
        Price::create(['product_id' => 45, 'price' => 35.00]);
        Price::create(['product_id' => 46, 'price' => 430.00]);
        Price::create(['product_id' => 47, 'price' => 345.00]);
        Price::create(['product_id' => 48, 'price' => 480.00]);
        Price::create(['product_id' => 49, 'price' => 35.00]);

        // CHEESECAKE
        Price::create(['product_id' => 50, 'price' => 380.00]);
        Price::create(['product_id' => 51, 'price' => 80.00]);
        Price::create(['product_id' => 52, 'price' => 415.00]);
        Price::create(['product_id' => 53, 'price' => 85.00]);
        Price::create(['product_id' => 54, 'price' => 185.00]);
        Price::create(['product_id' => 55, 'price' => 185.00]);
        Price::create(['product_id' => 56, 'price' => 185.00]);
        Price::create(['product_id' => 57, 'price' => 185.00]);

        // CUPCAKE
        Price::create(['product_id' => 58, 'price' => 100.00]);
        Price::create(['product_id' => 59, 'price' => 100.00]);
        Price::create(['product_id' => 60, 'price' => 100.00]);
        Price::create(['product_id' => 61, 'price' => 100.00]);
        Price::create(['product_id' => 62, 'price' => 100.00]);

        // BROWNIES
        Price::create(['product_id' => 63, 'price' => 100.00]);
        Price::create(['product_id' => 64, 'price' => 100.00]);
        Price::create(['product_id' => 65, 'price' => 100.00]);
        Price::create(['product_id' => 66, 'price' => 100.00]);
        Price::create(['product_id' => 67, 'price' => 100.00]);
        Price::create(['product_id' => 68, 'price' => 100.00]);
        Price::create(['product_id' => 69, 'price' => 100.00]);
        Price::create(['product_id' => 70, 'price' => 100.00]);
        Price::create(['product_id' => 71, 'price' => 100.00]);
        Price::create(['product_id' => 72, 'price' => 100.00]);
        Price::create(['product_id' => 73, 'price' => 100.00]);
        Price::create(['product_id' => 74, 'price' => 100.00]);
        Price::create(['product_id' => 75, 'price' => 100.00]);
        Price::create(['product_id' => 76, 'price' => 380.00]);
        Price::create(['product_id' => 77, 'price' => 80.00]);
        Price::create(['product_id' => 78, 'price' => 415.00]);
        Price::create(['product_id' => 79, 'price' => 85.00]);
        Price::create(['product_id' => 80, 'price' => 185.00]);

        // GALLETAS
        Price::create(['product_id' => 81, 'price' => 185.00]);
        Price::create(['product_id' => 82, 'price' => 185.00]);
        Price::create(['product_id' => 83, 'price' => 185.00]);
        Price::create(['product_id' => 84, 'price' => 100.00]);
        Price::create(['product_id' => 85, 'price' => 100.00]);
        Price::create(['product_id' => 86, 'price' => 100.00]);

        // PAY DE QUESO
        Price::create(['product_id' => 87, 'price' => 100.00]);
        Price::create(['product_id' => 88, 'price' => 100.00]);
        Price::create(['product_id' => 89, 'price' => 100.00]);
        Price::create(['product_id' => 90, 'price' => 100.00]);
        Price::create(['product_id' => 91, 'price' => 100.00]);
        Price::create(['product_id' => 92, 'price' => 100.00]);

        // SANDWICHON
        Price::create(['product_id' => 93, 'price' => 100.00]);
        Price::create(['product_id' => 94, 'price' => 100.00]);

        // PAY DANES
        Price::create(['product_id' => 95, 'price' => 100.00]);

        // PASTAS
        Price::create(['product_id' => 96, 'price' => 100.00]);
        Price::create(['product_id' => 97, 'price' => 100.00]);
        Price::create(['product_id' => 98, 'price' => 100.00]);
        Price::create(['product_id' => 99, 'price' => 100.00]);
        Price::create(['product_id' => 100, 'price' => 100.00]);
        Price::create(['product_id' => 101, 'price' => 100.00]);

        // LASAGNA
        Price::create(['product_id' => 102, 'price' => 100.00]);
        Price::create(['product_id' => 103, 'price' => 100.00]);
        Price::create(['product_id' => 104, 'price' => 100.00]);

        // PIB
        Price::create(['product_id' => 105, 'price' => 100.00]);
        Price::create(['product_id' => 106, 'price' => 100.00]);
        Price::create(['product_id' => 107, 'price' => 100.00]);
        Price::create(['product_id' => 108, 'price' => 100.00]);
        Price::create(['product_id' => 109, 'price' => 100.00]);
        Price::create(['product_id' => 110, 'price' => 100.00]);
        Price::create(['product_id' => 111, 'price' => 100.00]);
        Price::create(['product_id' => 112, 'price' => 100.00]);

        // CHILE EN NOGADA
        Price::create(['product_id' => 113, 'price' => 100.00]);

        // PIERNAS
        Price::create(['product_id' => 114, 'price' => 100.00]);
        Price::create(['product_id' => 115, 'price' => 100.00]);

        // MASCOTAS
        Price::create(['product_id' => 116, 'price' => 100.00]);
        Price::create(['product_id' => 117, 'price' => 100.00]);
        Price::create(['product_id' => 118, 'price' => 100.00]);
        Price::create(['product_id' => 119, 'price' => 100.00]);

        // CAFES
        Price::create(['product_id' => 120, 'price' => 100.00]);
        Price::create(['product_id' => 121, 'price' => 100.00]);
        Price::create(['product_id' => 122, 'price' => 100.00]);
        Price::create(['product_id' => 123, 'price' => 100.00]);
        Price::create(['product_id' => 124, 'price' => 100.00]);
        Price::create(['product_id' => 125, 'price' => 100.00]);
        Price::create(['product_id' => 126, 'price' => 100.00]);
        Price::create(['product_id' => 127, 'price' => 100.00]);
        Price::create(['product_id' => 128, 'price' => 100.00]);
        Price::create(['product_id' => 129, 'price' => 100.00]);
        Price::create(['product_id' => 130, 'price' => 100.00]);
        Price::create(['product_id' => 131, 'price' => 100.00]);

        // AGUAS
        Price::create(['product_id' => 132, 'price' => 100.00]);
        Price::create(['product_id' => 133, 'price' => 100.00]);
        // REFRESCOS
        Price::create(['product_id' => 134, 'price' => 100.00]);
        Price::create(['product_id' => 135, 'price' => 100.00]);
        Price::create(['product_id' => 136, 'price' => 100.00]);
        Price::create(['product_id' => 137, 'price' => 100.00]);
        Price::create(['product_id' => 138, 'price' => 100.00]);
        Price::create(['product_id' => 139, 'price' => 100.00]);

        // FRAPPES
        Price::create(['product_id' => 140, 'price' => 100.00]);
        Price::create(['product_id' => 141, 'price' => 100.00]);
        Price::create(['product_id' => 142, 'price' => 100.00]);
        Price::create(['product_id' => 143, 'price' => 100.00]);
        Price::create(['product_id' => 144, 'price' => 100.00]);
        Price::create(['product_id' => 145, 'price' => 100.00]);
        Price::create(['product_id' => 146, 'price' => 100.00]);
        Price::create(['product_id' => 147, 'price' => 100.00]);
        Price::create(['product_id' => 148, 'price' => 100.00]);




    }
}
