<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\solicitud_titulacion;
use App\Models\revision;
use App\Models\revisores;
use App\Models\User;
use App\Models\acto;

class ConfigurarSolicitudes extends Component
{
    public $solicitudes;
    public $orden;
    public $carrerAux;
    public $select;
    public $solicitud;
    public $id_solicitud;
    public $title;
    public $revisores_solicitud;
    public $cantidad_revisores;
    public $revisores_disponibles;
    public $revisoresSeleccionados = [];
    public $fecha_acto;
    public $sala;
    public $acto;
    public $acto_count;
    //modal
    public $revisores=False;

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
            })->Where("estado_solicitud",1)->orderBy('created_at', $this->orden)->get();
        } else {
            $this->solicitudes = solicitud_titulacion::Where("estado_solicitud",1)->orderBy('created_at', $this->orden)->get();
        }
        $this->revisores_disponibles=revisores::all();
        return view('livewire.configurar-solicitudes');
    }
        public function informacion($id_solicitud){
        $this->solicitud=solicitud_titulacion::find($id_solicitud);
        $this->id_solicitud=$id_solicitud;
        $this->revisores_solicitud = revision::Where("id_solicitud",$id_solicitud)->get();
        $this->cantidad_revisores=count($this->revisores_solicitud);
        $this->acto_count=count(acto::where("id_solicitud",$id_solicitud)->get());
        $this->acto=acto::where("id_solicitud",$id_solicitud)->first();
        $this->nombre=$this->solicitud->user->nombre;
        $this->apellidoP=$this->solicitud->user->apellidoP;
        $this->apellidoM=$this->solicitud->user->apellidoM;
        $this->correo=$this->solicitud->user->email;
        $this->carrera=$this->solicitud->user->carrera;
        $this->n_control=$this->solicitud->user->n_control;
        $this->plan=$this->solicitud->opcion->plan->plan;
        $this->select=2;
    }
    public function preparar(){
        $this->title="Elegir Revisores";
        $this->revisores=True;
    }
    public function seleccionarSinodales(){
        foreach($this->revisoresSeleccionados as $i){
                revision::create([
                    'estado_revision'=>"0",
                    'user_id'=>$i,
                    'id_solicitud'=>$this->id_solicitud,
                ]);
        $this->revisores=False;
        $this->revisores_solicitud = revision::Where("id_solicitud",$this->id_solicitud)->get();
        $this->cantidad_revisores=count($this->revisores_solicitud);
        }
    }
    public function reasignarSinodales(){
        revision::Where("id_solicitud",$this->id_solicitud)->delete();
        foreach($this->revisoresSeleccionados as $i){
                revision::create([
                    'estado_revision'=>"0",
                    'user_id'=>$i,
                    'id_solicitud'=>$this->id_solicitud,
                ]);
        $this->revisores=False;
        $this->revisores_solicitud = revision::Where("id_solicitud",$this->id_solicitud)->get();
        $this->cantidad_revisores=count($this->revisores_solicitud);
    }
}
    public function asignarActoRecepcional(){
                acto::create([
                    'fecha_acto'=>$this->fecha_acto,
                    'sala'=>$this->sala,
                    'id_solicitud'=>$this->id_solicitud,
                ]);
        $this->acto_count=count(acto::where("id_solicitud",$this->id_solicitud)->get());
        $this->acto=acto::where("id_solicitud",$this->id_solicitud)->first();
    }

    public function back(){
        $this->select=1;
    }
    
}
