<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(Request $req){
        if($req->id){
            $paciente = Paciente::find($req->id);
        }
        else{
            $paciente = new Paciente();
        }
        return view('paciente',compact('paciente'));
    }
    public function list(){
        $pacientes = Paciente::all();
        return view('pacientes',compact('pacientes'));
    }
    public function save(Request $req){
        if($req->id !=0){
            $paciente = Paciente::find($req->id);
        }
        else{
            $paciente = new Paciente();
        }
        
        $paciente -> nombre = $req->nombre;
        $paciente -> ApPat = $req->ApPat;
        $paciente -> ApMat = $req->ApMat;
        $paciente -> tele = $req->tele;
        $paciente->save();  

        return redirect()-> route('pacientes');

    }
    public function delete(Request $req){
        $paciente = Paciente::find($req->id);
        $paciente->delete();
        return redirect()-> route('pacientes');

    }
}
