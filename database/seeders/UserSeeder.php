<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Administrador: Acceso total
        User::create([
            'name' => 'Admin El Pozo',
            'email' => 'admin@elpozo.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Usuario estándar: Solo consulta
        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@example.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);
    }
}