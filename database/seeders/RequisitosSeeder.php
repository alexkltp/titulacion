<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Planes;
use App\Models\PlanesCarrera;
use App\Models\requisito_titulacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $opcion1 = [
    "Solicitud de Registro de Opcion de titulacion (3 Originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "Oficio de asignacion de tema y asesor (original para cotejo y 3 copias)",
    "Oficio de liberación del proyecto para Titulacion Integral (original para cotejo y 3 copias)",
    "Trabajo de tesis (1 CD en sobre de papel)",
    "Portada oficial para trabajos de titulación"
    ];
    $opcion2 = [
    "Solicitud de Registro de Opción de Titulación (3 originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "Oficio de liberación del proyecto para titulación integral (original para cotejo y 3 copias)",
    "Oficio de autorización o constancia de participación en el proyecto de investigación (3 copias y original para cotejo)",
    "Proyecto de investigación (1 CD en sobre de papel)",
    "Portada oficial para trabajos de titulación"
    ];
    $opcion3 = [
    "Solicitud de Registro de Opción de Titulación (3 originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "Testimonio de ceneval o diploma de la certificación oracle (3 copias y original para cotejo)",
    "constancia/reporte de presentación del examen ceneval (3 copias y original para cotejo). únicamente para examen ceneval"
    ];
    $opcion4 = [
    "Solicitud de Registro de Opción de Titulación (3 originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "Oficio de asignación de tema y asesor (original para cotejo y 3 copias)",
    "Oficio de liberación del proyecto para titulación integral (original para cotejo y 3 copias)",
    "Oficio de acreditación de residencias profesionales (original para cotejo y 3 copias)",
    "Oficio de no inconveniencia por parte de la empresa, en hoja membretada (original y 2 copias)",
    "Informe de residencia profesional (1 CD en sobre de papel)",
    "Portada oficial para trabajos de titulación"
    ];
    $opcion5 = [
    "Solicitud de Registro de Opción de Titulación (3 originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "Anteproyecto de libro de texto o prototipo didáctico (4 impresos y 1 CD)",
    "Portada oficial para trabajos de titulación"
    ];
    $opcion6 = [
    "Solicitud de registro de opción de titulación (3 originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "Oficio de autorización o constancia de participación en proyecto de investigación (3 copias y original para cotejo)",
    "Anteproyecto de investigación (4 impresos y 1 CD)",
    "Portada oficial para trabajos de titulación"
    ];
    $opcion7 = [
    "Solicitud de registro de opción de titulación (3 originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "Testimonio de ceneval o diploma de la certificación de oracle (3 copias y original para cotejo)",
    "Constancia/reporte de presentación de examen ceneval (3 copias y original para cotejo) unicamente para examen ceneval"
    ];
    $opcion8 = [
    "Solicitud de registro de opción de titulación (3 originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "oficio de autorización de los paquetes de materias para examen por áreas de conocimiento (3 copias)"
    ];
    $opcion9 = [
    "Solicitud de registro de opción de titulación (3 originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "Constancia con tira de materias (2 copias y original)"
    ];
    $opcion10 = [
        "solicitud de registro de opción de titulación (3 originales)",
        "Certificado de estudios (3 Copias y original para cotejo)",
        "Oficio de acreditación de residencias profesionales (3 copias y original para cotejo)",
        "Oficio de no inconveniencia por parte de la empresa, en hoja membretada (2 copias y original)",
        "Informe de residensia profesional (4 impresos y 1 CD)",
        "Portada para trabajos de titulación"
    ];
    $opcion11 = [
    "solicitud de registro de opción de titulación (3 originales)",
    "Certificado de estudios (3 Copias y original para cotejo)",
    "Oficio de la academia señalando que se cumplio con el proceso de Titulacion integrada(3 Copias y original para cotejo)",
    "Oficio de asignación de tema y asesor (3 Copias y original para cotejo)",
    "Informe técnico (4 impresos y 1 CD)",
    "Portada para trabajos de titulación"
    ];

    foreach ($opcion1 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 1,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion2 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 2,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion3 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 3,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion4 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 4,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion5 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 5,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion6 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 6,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion7 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 7,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion8 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 8,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion9 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 9,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion10 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 10,
        'descripcion_requisito' => $i,
        ]);    
    }
    foreach ($opcion11 as $i){
        requisito_titulacion:: create([
        'id_opcion' => 11,
        'descripcion_requisito' => $i,
        ]);    
    }

    }
}

