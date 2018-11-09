<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
// use App\Category;

class HomeController extends Controller
{
    public function indexHome(){
        // dd($category->products);
        $product = Product::where('is_active', true)->get();
        // $categories = $category::all();
        $data=[
            'title' => 'HomeShop-laravel',
            'products' => $product,
            // 'categories' => $categories
        ];

        return view('layout.layoutShop.homeShop', $data);
    }
}
