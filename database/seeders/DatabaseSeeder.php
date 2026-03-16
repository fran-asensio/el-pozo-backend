<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void {
    // Crear Admin
    \App\Models\User::create([
        'name' => 'Admin El Pozo',
        'email' => 'admin@elpozo.com',
        'password' => bcrypt('admin123'),
        'role' => 'admin'
    ]);

    // Crear alérgenos base
    $alergenos = ['Gluten', 'Lácteos', 'Soja', 'Pescado'];
    foreach ($alergenos as $nombre) {
        \App\Models\Alergeno::create(['nombre_alergeno' => $nombre]);
    }
}
}
