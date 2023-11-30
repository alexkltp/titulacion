<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\opcion_titulacion;
use App\Models\requisito_titulacion;
use App\Models\sinodales_solicitud;
use App\Models\solicitud_titulacion;
use App\Models\PlanesCarrera;
use App\Models\revision;
use App\Models\revisores;
use App\Models\sinodal;
use App\Models\User;
use App\Models\acto;
use Carbon\Carbon;

class SolicitudEstudiante extends Component
{
    public $opciones;
    public $selector;
    public $carreras;
    public $aux;
    public $aux_2;
    public $opcion;
    public $requisitos;
    public $user;
    public $nombre;
    public $apellidoP;
    public $apellidoM;
    public $correo;
    public $carrera;
    public $plan;
    public $n_control;
    public $estado_solicitud;
    public $id_solicitud;
    public $solicitud;
    public $revisores_solicitud;
    public $cantidad_sinodales;
    public $sinodales_solicitud;
    public $sinodales_disponibles;
    public $acto;
    public $acto_count;
    public $revisoresSeleccionados = [];

    //modal
    public $enviada=false;
    public $sinodales;
    public $title;

    public function mount(){
        $this->selector=1;
        $this->aux=1;
        $this->title="La Solicitud fue enviada correctamente";
        $this->user=User::find(Auth::user()->id);
        $this->nombre=$this->user->nombre;
        $this->apellidoP=$this->user->apellidoP;
        $this->apellidoM=$this->user->apellidoM;
        $this->correo=$this->user->email;
        $this->carrera=$this->user->carrera;
        $this->n_control=$this->user->n_control;
    }

    public function render()
    {
        $this->opciones=opcion_titulacion::Where('id_plan',$this->selector)->get();
        $this->carreras=PlanesCarrera::Where('id_plan',$this->selector)->get();
        $this->sinodales_disponibles=sinodal::all();
        $this->estado_solicitud=solicitud_titulacion::Where("user_id",Auth::user()->id)->first();
        if($this->estado_solicitud!=null){
        $this->sinodales_solicitud = sinodales_solicitud::Where("id_solicitud",$this->estado_solicitud->id_solicitud)->get();
        $this->cantidad_sinodales=count($this->sinodales_solicitud);
        $this->solicitud=solicitud_titulacion::find($this->estado_solicitud->id_solicitud);
        $this->revisores_solicitud = revision::Where("id_solicitud",$this->estado_solicitud->id_solicitud)->get();
        $this->acto=acto::where("id_solicitud",$this->estado_solicitud->id_solicitud)->first();
        $this->acto_count=count(acto::where("id_solicitud",$this->estado_solicitud->id_solicitud)->get());
 
        }
        
        return view('livewire.solicitud-estudiante');
    }
    public function seleccionar($id_opcion){
        $this->requisitos=requisito_titulacion::Where('id_opcion',$id_opcion)->get();
        $this->opcion=opcion_titulacion::find($id_opcion);
        $this->plan=$this->opcion->plan->plan;
        $this->aux=2;
    }
    public function regresar(){
        $this->aux=1;
    }
    public function cerrar(){
        $this->enviada=False;
        $this->aux=1;
    }
    public function siguiente(){
        $this->aux_2=1;
    }
    public function enviarSolicitud(){
        solicitud_titulacion::create([
            'estado_solicitud' => 0,
            'fecha_solicitud' => Carbon::now(),
            'user_id' => Auth::user()->id,
            'id_opcion' => $this->opcion->id_opcion,
        ]);
        $this->aux=1;
        $this->enviada=True;
    }

    public function seleccionarSinodales(){
        foreach($this->revisoresSeleccionados as $i){
                sinodales_solicitud::create([
                    'user_id'=>$i,
                    'id_solicitud'=>$this->estado_solicitud->id_solicitud,
                ]);
        $this->sinodales=False;
        $this->sinodales_solicitud = revision::Where("id_solicitud",$this->estado_solicitud->id_solicitud)->get();
        $this->cantidad_sinodales=count($this->revisores_solicitud);
        }
    }

    public function preparar(){
        $this->title="Elegir Sinodales";
        $this->sinodales=True;
    }

public function nuevaSolicitud()
{
    // Eliminar filas en actos primero
    acto::where("id_solicitud", $this->estado_solicitud->id_solicitud)->delete();

    // Luego eliminar la fila en solicitud_titulacion
    solicitud_titulacion::where("id_solicitud", $this->estado_solicitud->id_solicitud)->delete();
}

}
