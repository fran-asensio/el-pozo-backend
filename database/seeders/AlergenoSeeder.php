<?php

namespace Database\Seeders;

use App\Models\Alergeno;
use Illuminate\Database\Seeder;

class AlergenoSeeder extends Seeder
{
    public function run(): void
    {
        $alergenos = [
            ['nombre_alergeno' => 'Gluten', 'descripcion' => 'Cereales como trigo, cebada o centeno.'],
            ['nombre_alergeno' => 'Lactosa', 'descripcion' => 'Leche y derivados lácteos.'],
            ['nombre_alergeno' => 'Soja', 'descripcion' => 'Habas de soja y derivados.'],
            ['nombre_alergeno' => 'Frutos de cáscara', 'descripcion' => 'Almendras, nueces, pistachos.'],
        ];

        foreach ($alergenos as $a) {
            Alergeno::create($a);
        }
    }
}