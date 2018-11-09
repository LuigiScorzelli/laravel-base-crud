<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CreateProductController extends Controller
{
    public function indexCreate(){

        $data=[
            'title' => 'Crea un nuovo prodotto',
            'categories' => Category::all()
        ];

        return view('products.create', $data);
    }

    // modifica prodotto per id

    public function edit($id){

        $product = Product::find($id);


        return view('products.edit', ['product' => $product]);

    }

    // cancella prodotto dalla tabella

    public function delete(Product $id){

        $id->delete();

        return redirect()->route('products');

    }
    
     //  save edit

    public function change(Product $product, Request $request){

        $data = $request->all();


        $product->fill($data);

        // is_active
        if($request->input('is_active') == null){
            $product->is_active = false;
        }else{
            $product->is_active = true;
        }

        // special

        if($request->input('special') == null){
            $product->special = false;
        }else{
            $product->special = true;
        }

        $product->save();

        return redirect()->route('products');

    }

    public function save(Request $request){

        $data= $request->all();

        if(empty($data['title']) || empty($data['price'])){

            return 'error';
        }

        $data['slug'] = str_slug($data['title']);


        $product = new Product();
        $product->fill($data);
        $product->save();

        return redirect()->route('products');
    }
}
