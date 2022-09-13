<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Aqui tengo las paginas que voy a necesitar y las estaré llamando en web
class PageController extends Controller
{
    public function home(){
        return view ('home');
    }
    public function quienessomos(){
        return 'quienes-somos';
    }
    public function contacto(){
        return 'contacto';
        return view ('contacto');
    }
}
