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
            return 'error';
        }

        $data['slug'] = str_slug($data['title']);


        // $product->title= $data['title'];
        // $product->description= (!empty($data['description'])) ? $data['description'] : null;
        // $product->price= $data['price'];
        // $product->slug= str_slug($data['title']);

        $product = new Product();
        $product->fill($data);
        $product->save();

        return redirect()->route('products');
    }
}
