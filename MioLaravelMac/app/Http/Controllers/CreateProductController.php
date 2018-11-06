<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CreateProductController extends Controller
{
    public function indexCreate(){

        $data=[
            'title' => 'Crea un nuovo prodotto',
        ];

        return view('products.create', $data);
    }

    public function save(Request $request){

        $data= $request->all();

        if(empty($data['title']) || empty($data['price'])){

            // prova check img
            // if (empty(filter_var($data['img'], FILTER_VALIDATE_URL))) {
            //     dd($data['img']);
            // }

            ////
            return 'error';
        }

        $data['slug'] = str_slug($data['title']);


        $product = new Product();
        $product->fill($data);
        $product->save();

        return redirect()->route('products');
    }
}
