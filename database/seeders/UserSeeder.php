<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crear registros de sinodales
        $sinodales = [
            "Abel Alberto Pintor Estrada",
            "Anastacio Antolino Hernández",
            "Alejandro Amaro Flores",
            "Aurelio Amaury Coria Ramírez",
            "Brenda González Gómez"
        ];

        foreach ($sinodales as $nombre) {
            $nombreCompleto = explode(' ', $nombre);
            $apellidoP = $nombreCompleto[1];
            $apellidoM = $nombreCompleto[2];

            DB::table('users')->insert([
                'nombre' => $nombreCompleto[0],
                'apellidoP' => $apellidoP,
                'apellidoM' => $apellidoM,
                'n_control' => '12345678', // Cambia según sea necesario
                'carrera' => 'Ingeniería en Sistemas', // Cambia según sea necesario
                'sexo' => 'Masculino', // M para masculino, F para femenino, u otro valor
                'rol' => 2, // 1 para algún rol específico, 0 para otro rol
                'email' => strtolower(str_replace(' ', '.', $nombre) . '@example.com'),
                'password' => bcrypt('contraseña'),
            ]);
        }

        // Crear registros de revisores
        $revisores = [
            "Efréη De Jesús Pαcheco Pimentel",
            "Ezequiel Pérez Hernández",
            "Felipe Morales López",
            "Fernando Villaseñor Béjar",
            "Heberto Ferreira Medina"
        ];

        foreach ($revisores as $nombre) {
            $nombreCompleto = explode(' ', $nombre);
            $apellidoP = $nombreCompleto[1];
            $apellidoM = $nombreCompleto[2];

            DB::table('users')->insert([
                'nombre' => $nombreCompleto[0],
                'apellidoP' => $apellidoP,
                'apellidoM' => $apellidoM,
                'n_control' => '12345678', // Cambia según sea necesario
                'carrera' => 'Ingeniería en Sistemas', // Cambia según sea necesario
                'sexo' => 'Masculino', // M para masculino, F para femenino, u otro valor
                'rol' => 2, // 1 para algún rol específico, 0 para otro rol
                'email' => strtolower(str_replace(' ', '.', $nombre) . '@example.com'),
                'password' => bcrypt('contraseña'),
            ]);
        }
    }
}
