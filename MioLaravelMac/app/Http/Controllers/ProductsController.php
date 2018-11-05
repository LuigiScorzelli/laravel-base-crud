<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductsController extends Controller
{
    public function indexProdotti(){

        $products = Product::all();

        $data= [
            'title'=> 'Prodotti Shop',
            'products' => $products
        ];

        return view('products.prodotti', $data);
    }
}
