<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatorClient;
use App\Http\Requests\validatorForms;
use Illuminate\Http\Request;

class controlllerViews extends Controller
{
    function ShowMain(){
        return view('principal');
    }

    function ShowRegistrer(){
        return view('registro');
    }

    function ShowRegistrerClient(){
        return view('registrarCliente');
    }

    function PostRegistrer(validatorForms $req){
        $data = $req->input('txtTitulo');
        return redirect()->route('registrer')->with('exito', compact('data'));
        
    }
    function Postcliente(ValidatorClient $req){
        
        return redirect()->route('registrerClient')->with('success','success');
        
    }
}
