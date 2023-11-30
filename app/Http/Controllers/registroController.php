<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
class registroController extends Controller
{
    public function index(){return view('registro');}
    
    public function postRegistro(Request $request)
{
    
    // Validación de los datos enviados
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:20',
        'apellidoP' => 'required|string|max:15',
        'apellidoM' => 'required|string|max:15',
        'n_control' => 'required|regex:/^\d{8}$/',
        'sexo' => 'required|in:Masculino,Femenino,Otro',
        'carrera' => 'required|in:Ingenieria en sistemas,Ingenieria industrial,Ingenieria mecatronica,Ingenieria mecanica,Ingenieria electrica,Ingenieria biomedica,Ingenieria bioquimica,Ingenieria electronica,
        Ingenieria en tecnologias de la informacion,Ingenieria en gestion empresarial,Ingenieria en materiales',
        'email' => [
            'required', 
            'email', 
            'regex:/^[a-zA-Z]\d{8}@morelia\.tecnm\.mx$/i', 
            function ($attribute, $value, $fail) use ($request) {
                $n_control = $request->input('n_control');
                $n_control_email = substr($value, 1, 8); // Obtener el número de control del correo electrónico
                if ($n_control !== $n_control_email) {
                    $fail($attribute.' no coincide con el número de control proporcionado.');
                }
            },
            Rule::unique('users', 'email'),
        ],
        
        'password' => 'required|string|max:10',
    ]);
    $user=User::create([
        'nombre' => $validatedData['nombre'],
        'apellidoP' => $validatedData['apellidoP'],
        'apellidoM' => $validatedData['apellidoM'],
        'sexo' => $validatedData['sexo'],
        'n_control' => $validatedData['n_control'],
        'carrera' => $validatedData['carrera'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'rol' => 0
    ]);

    // Redireccionar al usuario a otra página
    return redirect()->route('login');

}
    public function solicitud(){
        return view('solicitud-est');
    }
    public function nuevasSolicitudes(){
        return view('nuevaSolicitud');
    }
    public function configSolicitudes(){
        return view('configSolicitudes');
    }
}
