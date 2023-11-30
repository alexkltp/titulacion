<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\opcion_titulacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::Class,
            SinodalesSeeder::Class,
            PlanSeeder::Class,
            OpcionSeeder::Class,
            RequisitosSeeder::Class,
        ]);

    }
}

