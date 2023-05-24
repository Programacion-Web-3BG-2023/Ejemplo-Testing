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

    public function EliminarPersona(Request $request){
        $persona = Persona::find($request -> get("id"));
        $persona -> delete();

        return view("personas", [
            "personas" => Persona::all(),
            "eliminado" => true
        ]);

    }
}

