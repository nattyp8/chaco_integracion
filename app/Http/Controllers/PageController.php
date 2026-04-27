<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function antecedentes(){
        return view('home', [
            'bgImage'=>'/images/antecedentes.svg'
        ]);
    }
}
