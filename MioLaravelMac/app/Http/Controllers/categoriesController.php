<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoriesController extends Controller
{
    public function category(){

        $categorys = Category::all();

        $data = [
            'title' => 'Categorie prodotti',
            'categorys' => $categorys
        ];

        return view('categories.category', $data);
    }

}
