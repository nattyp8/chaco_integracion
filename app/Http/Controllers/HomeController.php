<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $section = request('section', 'antecedentes');
        $lang= request('lang','es');

        $json=file_get_contents(resource_path("data/data_guerra/$lang/home.json"));
        $data=json_decode($json, true);

        $shared= $data['shared'];

        $sectionData=$data['sections'][$section];

        $nav= $data['nav'];

        return view ('home',[
            'title' => $shared['title'],
            'paragraphs' => $shared['paragraphs'],
            'bgImage' => $sectionData['image'],
            'nav' => $nav,
            'section' => $section,
            'lang' => $lang
        ]);
    }
}
