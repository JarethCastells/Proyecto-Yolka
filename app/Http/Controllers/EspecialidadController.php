<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function index(Request $req){
        if($req->id){
            $especialidad = Especialidad::find($req->id);
        }
        else{
            $especialidad = new Especialidad();
        }
        return view('especialidad',compact('especialidad'));
    }
    public function list(){
        $especialidades = Especialidad::all();
        return view('especialidades',compact('especialidades'));
    }
    public function save(Request $req){
        if($req->id !=0){
            $especialidad = Especialidad::find($req->id);
        }
        else{
            $especialidad = new Especialidad();
        }
        
        $especialidad -> nombre = $req->nombre;
        $especialidad->save();  
        return redirect()-> route('especialidades');

    }
    public function delete(Request $req){
        $especialidad = Especialidad::find($req->id);
        $especialidad->delete();
        return redirect()-> route('especialidades');

    }
}
