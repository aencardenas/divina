<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::create(['group' => 'Barra']);
        Group::create(['group' => 'Rebanada']);
        Group::create(['group' => 'Grande']);
        Group::create(['group' => '# Personas']);
        Group::create(['group' => 'Chico']);
        Group::create(['group' => 'Pieza']);
        Group::create(['group' => 'Kilo']);
        Group::create(['group' => 'Individual']);
        Group::create(['group' => 'Personalizados']);
        Group::create(['group' => 'Mediano']);
        Group::create(['group' => 'Medio litro']);
        Group::create(['group' => 'Litro']);
        Group::create(['group' => 'Lata']);
        Group::create(['group' => 'Embase']);
        Group::create(['group' => 'Cupcake']);
        Group::create(['group' => 'Familiar']);
        Group::create(['group' => 'Rosca']);
        Group::create(['group' => 'Pastel']);
    }
}
