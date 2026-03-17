<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Alergeno;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definimos los datos base de los productos
        $productos = [
            [
                'nombre' => 'Jamón Cocido Extra',
                'descripcion' => 'Jamón de alta calidad de El Pozo, sin fosfatos.',
                'nutrientes' => [
                    'calorias' => 105.00, 'grasas' => 3.00, 'azucares' => 0.50, 'proteinas' => 19.00, 'hidratos' => 0.80
                ],
                'alergenos' => [1]
            ],
            [
                'nombre' => 'Salchichas King Original',
                'descripcion' => 'Las clásicas salchichas gigantes de El Pozo.',
                'nutrientes' => [
                    'calorias' => 240.00, 'grasas' => 18.50, 'azucares' => 1.20, 'proteinas' => 12.00, 'hidratos' => 4.50
                ],
                'alergenos' => [1, 2]
            ],
            [
                'nombre' => 'Pechuga de Pavo BienStar',
                'descripcion' => 'Pechuga de pavo con bajo contenido en grasa.',
                'nutrientes' => [
                    'calorias' => 85.00, 'grasas' => 1.00, 'azucares' => 0.30, 'proteinas' => 20.00, 'hidratos' => 0.50
                ],
                'alergenos' => [3]
            ],
        ];

        foreach ($productos as $item) {
            // 1. Creamos el producto primero
            $nuevoProducto = Producto::create([
                'nombre' => $item['nombre'],
                'descripcion' => $item['descripcion'],
                'codigo_qr' => '' 
            ]);

            // 2. Generamos la URL automática de tu web para el QR
            $urlParaQR = url('/productos/' . $nuevoProducto->id_producto);

            // 3. Actualizamos el producto con su URL real
            $nuevoProducto->update([
                'codigo_qr' => $urlParaQR
            ]);

            // 4. Creamos los Nutrientes (Relación 1:1)
            $nuevoProducto->nutriente()->create($item['nutrientes']);

            // 5. Asociamos los Alérgenos (Relación N:M en la tabla trazas)
            if (!empty($item['alergenos'])) {
                $nuevoProducto->alergenos()->attach($item['alergenos']);
            }
        }
    }
}