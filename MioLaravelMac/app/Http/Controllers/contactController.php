<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact(){

        $data = [
            'title' => 'Contattaci'
        ];
        return view('contact', $data);
    }
}
