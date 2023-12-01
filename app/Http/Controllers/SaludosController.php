<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludosController extends Controller
{
    public function hola(){
        return "hola comoc estas";
    }
    public function despedida(){
        return "chao que te vaya bien";

        
    }
    public function inter(){
        return "quien eres";
        
    }
    public function nombre($nombre){
        return "como te llamas ";
        
    }
}
