<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Livewire\SolicitudEstudiante;
use App\Models\solicitud_titulacion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SolicitudAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'solicitud' => solicitud_titulacion::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'estado_solicitud' => 'required|integer',
            'razon_rechazo' => 'nullable',
            'fecha_solicitud' => 'required',
            'user_id' => 'required',
            'id_opcion' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'message' => 'Faltan campos por llenar'
            ]);
        }

        
        $validated = $validator->validated();
        $solicitud_titulacion = solicitud_titulacion::create($validated);
        
        if($solicitud_titulacion){
            return response()->json([
                'message' => 'Solicitud agregada'
            ], 200);

        } else{
            return response()->json([
                'message' => 'No se agrego la solicitud'
            ], 500);
        }
    }

    /**
     * Funcion anterior. 
     * 
     *  public function show(string $id)
    *{
     *   return response()->json([
      *      'solicitud' => solicitud_titulacion::find($id),
        *    'usuario' => User::find($id)
       * ]);
        
    *}
     */
    public function show(string $id)
    {
        // 
        $solicitud = solicitud_titulacion::with('user')->find($id);
    
        return response()->json([
            'solicitud' => $solicitud
            
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'estado_solicitud' => 'required|integer',
            'razon_rechazo' => 'nullable',
            'fecha_solicitud' => 'required',
            'user_id' => 'required',
            'id_opcion' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'message' => 'Faltan campos por llenar o son incorrectos'
            ]);
        }

        $validated = $validator->validated();

        try {
           
            $solicitud_titulacion = solicitud_titulacion::find($id);

            if(!$solicitud_titulacion) {
                return response()->json([
                    'message' => 'Solicitud no encontrada'
                ]);
            }
            $solicitud_titulacion->fill($validated);
            $solicitud_titulacion->save();

            return response()->json([
                'message' => 'Solicitud Actualizada'
            ]);
        } catch (\Exception $ex) {
            info($ex->getMessage());
            return response()->json([
                'message' => 'Error al editar la solicitud'
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     
        try {
            $solicitud_titulacion = solicitud_titulacion::find($id);

            $solicitud_titulacion->delete();

            return response()->json([
                'message' => 'Solicitud Eliminada'
            ]);
        } catch (\Exception $ex) {
            info($ex->getMessage());
            return response()->json([
                'message' => 'Error al eliminar solicitud'
            ]);
        }

        
    }
}
