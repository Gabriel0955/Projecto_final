<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller
{
    public function __invoke()
    {
        return view("trabajo.index");
    }
}
