<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\revisores;
use App\Models\sinodal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SinodalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $sinodales = ["Abel Alberto Pintor Estrada",
                    "Anastacio Antolino Hernández",
                    "Alejandro Amaro Flores",
                    "Aurelio Amaury Coria Ramírez",
                    "Brenda González Gómez"];

    $revisores = ["Efréη De Jesús Pαcheco Pimentel",
                  "Ezequiel Pérez Hernández",
                  "Felipe Morales López",
                  "Fernando Villaseñor Béjar",
                  "Heberto Ferreira Medina"];

    for ($i=1; $i <=5 ; $i++) { 
        sinodal:: create([
        'user_id' => $i,
        ]);    
    }
    for ($i=6; $i <=10 ; $i++) { 
        revisores:: create([
        'user_id' => $i,
        ]);    
    }
    }
}
