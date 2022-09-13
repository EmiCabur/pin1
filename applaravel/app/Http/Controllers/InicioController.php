<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(Request $peticion){
        //return view('vista1');
        $arreglo=['nombre'=> $peticion ->query('nombre', 'NN')];
        //Es un arreglo donde pedimos la variable
        //nombre y si no se manda nada va a ser NN
        return view('vista1')->with($arreglo);
    }
}
