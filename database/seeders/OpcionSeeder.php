<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\opcion_titulacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $opciones2010 = ["I.Titulacion Integral por Tesis",
                "II.Titulacion Integral por Proyecto de Investigacion",
                "III.Titulacion Integral por Examen General Para el Egreso de la Licenciatura (ceneval)",
                "IV.Titulacion Integral por Informe Tecnico de Residencia Profesional"];

    $opciones20042005 = ["I.Tesis Profesional",
            "II.Proyecto de investigación",
            "III.Examen por areas del conocimiento CENEVAL",
            "lV.Examen por areas del conocimiento",
            "V.Escolaridad por promedio",
            "VI.Informe de residencia profesional",
            "VII.Titulacion integrada"];

    foreach ($opciones2010 as $i){
        opcion_titulacion:: create([
        'opcion' => $i,
        'id_plan' => 1,
        ]);    
      }
    foreach ($opciones20042005 as $i){
        opcion_titulacion:: create([
            'opcion' => $i,
            'id_plan' => 2,
        ]);     
      }
    }
}

