<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuerraController extends Controller
{
    public function year($year){
        $json =file_get_contents(resource_path('data/contenido2.json'));
        $data=json_decode($json,true);

        $lang= request('lang','es');

        $bgImage = $data[$lang]['years'][$year]['map'];
        
        $nav =$data[$lang]['home']['nav'];

        return view('guerra.year',[
            'yearData' =>$data[$lang]['years'][$year],
            'bgImage' => $bgImage,
            'lang' => $lang,
            'nav'=>$nav
        ]);
    }
}
