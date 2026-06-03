<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Pest\Support\View;

class EcoController extends Controller
{


    public function welcome () {
     return view('guerra_chaco.welcome');
    }

    public function vistaPr () {
        return view('ecorregiones_chaco.vistaPrincipal');
    }

    //ecorregiones
    public function ecoVista () {
       return view('ecorregiones_chaco.ecorregiones.ecoVista');

    }

    public function contReg(string $region) {
        $locale = session('locale', 'es');
        $file = resource_path("data/data_ecorregiones/{$locale}/ecorregiones_{$locale}.json");



        // Si no existe el archivo del idioma, usa español por defecto
        if (!file_exists($file)) {
            $file = resource_path("data/data_ecorregiones/es/ecorregiones_es.json");
        }

        $eco = json_decode(file_get_contents($file), true);
        return view('ecorregiones_chaco.ecorregiones.contReg', ['region' => $eco[$region]]);
    }

    //precipitacioness

    public function precVista () {
        return View('ecorregiones_chaco.precipitaciones.precVista');
    }


    //zonas climaticas
     public function zonasVista () {
       return view('ecorregiones_chaco.zonasClimaticas.zonasVista');
    }


    public function contRegV (string $region) {

        $locale = session('locale', 'es');
        $file = resource_path("data/data_ecorregiones/{$locale}/zonas_climaticas.json");
         if (!file_exists($file)) {
        $file = resource_path("data/data_ecorregiones/es/zonas_climaticas.json");
    }

    $zonas = json_decode(file_get_contents($file), true);
    return view('ecorregiones_chaco.zonasClimaticas.contReg', ['region' => $zonas[$region]]);
    }
}
