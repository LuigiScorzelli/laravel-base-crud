<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function indexHome(){

        $product = Product::all();

        $data=[
            'title' => 'HomeShop-laravel',
            'products' => $product
        ];

        return view('homePage', $data);
    }
}
