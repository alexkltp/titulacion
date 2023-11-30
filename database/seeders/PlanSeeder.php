<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Planes;
use App\Models\PlanesCarrera;
use App\Models\opcion_titulacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    $planes =["PLAN 2010","PLAN 2004/2005"];

    foreach ($planes as $i){
        Planes:: create([
        'plan' => $i,
        ]);    
    }
        
    $carreras2010 = ["Administración LADM-2010-234",
                "Bioquímica IBQA-2010-207",
                "Contador Público COPU-2010-205",
                "Eléctrica IELE-2010-209",
                "Electrónica IELC-2010-211",
                "Gestión Empresarial IGEM-2009-201",
                "Industrial IIND-2010-227",
                "Informática IINF-2010-220",
                "I.T.I.C.S. ITIC-2010-225",
                "Materiales IMAT-2010-222"];

    $carreras20042005 = ["Administración LADM-2004-300",
            "Bioquímica IBQA-2005-288",
            "Contaduría LCON-2004-302",
            "Eléctrica IELE-2005-290",
            "Electrónica IELC-2004-292",
            "Industrial IIND-2004-297",
            "Informática LINF-2004-303",
            "Materiales IMAT-2005-295",
            "Mecánica IMEC-2005-298",
            "Sistemas ISIC-2004-296",
            "Mecánica IMEC-2010-228",
            "Sistemas ISIC-2010-224"];

    foreach ($carreras2010 as $i){
        PlanesCarrera:: create([
        'id_plan' => 1,
        'carrera' => $i,
        ]);    
      }
    foreach ($carreras20042005 as $i){
        PlanesCarrera:: create([
            'id_plan' => 2,
            'carrera' => $i,
        ]);     
      }
    }
}

