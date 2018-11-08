<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function indexHome(){

        $product = Product::where('is_active', true)->get();

        $data=[
            'title' => 'HomeShop-laravel',
            'products' => $product
        ];

        return view('layout.layoutShop.homeShop', $data);
    }
}
