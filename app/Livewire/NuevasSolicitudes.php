<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\solicitud_titulacion;
use App\Models\User;

class NuevasSolicitudes extends Component
{
    public $solicitudes;
    public $carrera;
    public $orden;
    public $select;
    public $solicitud;
    public $nombre;
    public $apellidoP;
    public $apellidoM;
    public $correo;
    public $carrerAux;
    public $plan;
    public $n_control;
    public $title;
    public $razon_rechazo;

    //modales
    public $modal_aceptar=false;
    public $modal_rechazar=false;
    public function mount(){
        $this->orden='desc';
        $this->carrerAux='Todas las carreras';
        $this->select=1;
    }
    public function render()
    {
        if ($this->carrerAux !== "Todas las carreras") {
            $this->solicitudes = solicitud_titulacion::whereHas('user', function ($query) {
                $query->where('carrera', $this->carrerAux);
            })->orderBy('created_at', $this->orden)->get();
        } else {
            $this->solicitudes = solicitud_titulacion::orderBy('created_at', $this->orden)->get();
        }
        return view('livewire.nuevas-solicitudes');
    }
    public function informacion($id_solicitud){
        $this->solicitud=solicitud_titulacion::find($id_solicitud);
        $this->nombre=$this->solicitud->user->nombre;
        $this->apellidoP=$this->solicitud->user->apellidoP;
        $this->apellidoM=$this->solicitud->user->apellidoM;
        $this->correo=$this->solicitud->user->email;
        $this->carrera=$this->solicitud->user->carrera;
        $this->n_control=$this->solicitud->user->n_control;
        $this->plan=$this->solicitud->opcion->plan->plan;
        $this->select=2;
    }
    public function aceptar(){
        $this->modal_aceptar=True;
        $this->solicitud->estado_solicitud=1;
        $this->solicitud->save();
        $this->title="Solicitud Aceptada";
        $this->select=1;
    }
    public function cerrar(){
        $this->modal_aceptar=False;
    }
    public function preparar(){
        $this->title="Solicitud Rechazada";
        $this->modal_rechazar=True;
    }
    public function rechazar(){
        $this->solicitud->estado_solicitud=2;
        $this->solicitud->razon_rechazo=$this->razon_rechazo;
        $this->solicitud->save();
        $this->select=1;
        $this->modal_rechazar=False;
    }
    public function back(){
        $this->select=1;
    }

}
