<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuerraController extends Controller
{
    public function year($year){

        $lang= request('lang','es');

        $jsonYears =file_get_contents(
            resource_path("data/data_guerra/$lang/years.json"));

        $years=json_decode($jsonYears,true);


        $jsonHome=file_get_contents(resource_path("data/data_guerra/$lang/home.json"));


        $home = json_decode($jsonHome,true);

        $yearData= $years[$year];

        $bgImage=$yearData['map'];

        $nav = $home['nav'];

        return view('guerra_chaco.guerra.year',[
            'yearData' =>$yearData,
            'bgImage' => $bgImage,
            'lang' => $lang,
            'nav'=>$nav
        ]);
    }
}
