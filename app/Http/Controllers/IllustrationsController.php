<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IllustrationsController extends Controller
{
    public function index()
    {
        $illustrations = array();
        $files = glob(resource_path('views/illustrations'). '/*');
        foreach($files as $file){
            array_push($illustrations, explode('.', basename($file))[0]);
        }
        $data = [
            'illustrations' => $illustrations
        ];
        return view('index', $data);
    }

    public function illustrations($name)
    {
        return view('illustrations/' . $name);
    }
}
