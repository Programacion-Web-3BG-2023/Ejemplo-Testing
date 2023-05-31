<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function InsertarPersona(Request $request){
        $p = new Persona();
        $p -> nombre = $request -> post("nombre");
        $p -> apellido = $request -> post("apellido");

        $p -> save();


        return view("personas",[
            "insertado" => true,
            "personas" => Persona::all()
        ]);
    }

    public function ListarPersonas(Request $request){
        return view("personas", [
            "personas" => Persona::all()
        ]);
    }

    public function ListarUnaPersona(Request $request, $idPersona){
        return view("unaPersona", [
            "persona" => Persona::findOrFail($idPersona)
        ]);
    }
    

    public function EliminarPersona(Request $request, $idPersona){
        $persona = Persona::find($idPersona);
        $persona -> delete();

        return view("personas", [
            "personas" => Persona::all(),
            "eliminado" => true
        ]);

    }
}

