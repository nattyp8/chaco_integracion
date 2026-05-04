<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $section = request('section', 'antecedentes');
        $lang= request('lang','es');

        $json=file_get_contents(resource_path('data/contenido.json'));
        $data=json_decode($json, true);

        $sectionData=$data[$lang]['home'][$section];

        return view ('home',[
            'data'=>$sectionData,
            'bgImage'=>$sectionData['image'],
            'section'=>$section
        ]);

        // $images = [
        //     'antecedentes'=> 'images/antecedentes.svg',
        //     'fortines'=> 'images/fortines.svg',
        //     'fronteras'=> 'images/fronteras.svg',
        // ];

        // $data = [
        //     "title" => "BACKGROUND TO THE CHACO WAR AND RESOLUTION OF THE CONFLICT",
        //     "paragraphs" => [
        //         "Desde el siglo XIX, la definición de los límites fronterizos de Bolivia y Paraguay en la zona del Chaco Boreal había sido motivo de disputa. Ante esto, comisiones internacionales de carácter neutral plantearon distintas propuestas de reparto que nunca llegaron a concretarse. \n\n En ausencia de acuerdos, a principios del siglo XX Bolivia y Paraguay iniciaron la ocupación del territorio mediante la fundación de fortines militares. Paraguay fomentó además el asentamiento de colonias menonitas en la zona a partir de los años 20. \n\n Tras el fin de la Guerra, después de tres años de negociaciones, el 21 de julio de 1938 finalmente se logró que las dos partes llegaran a un acuerdo sobre los límites del Chaco mediante el Tratado de Paz, Amistad y Límites. Paraguay obtuvo el 80% del territorio en litigio, mientras que Bolivia logró asegurar su soberanía petrolera y un puerto en el río Paraguay (Puerto Busch), logrando así su salida al Océano Atlántico. \n\n En abril de 2009, setenta y cuatro años después de la finalización del conflicto, los presidentes de Bolivia y Paraguay acordaron la demarcación definitiva -de los límites- entre ambos países mediante la firma de la Memoria Final de la demarcación del límite internacional entre ambos países."
        //     ]
        // ];

        // $bgImage = $images[$section] ?? $images['antecedentes'];

        // return view('home', compact('data', 'bgImage', 'section'));
    }
}
