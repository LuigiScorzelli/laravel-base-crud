<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class createCategoryController extends Controller
{
    public function create(){
        $data = [
            'title' => 'Crea categoria'
        ];

        return view('categories.createCategory', $data);
    }

    public function save(Request $request){

        $data= $request->all();

        // dd($data);

        if(empty($data['name'])){

            return 'error';
        }

        $data['category_slug'] = str_slug($data['name']);


        $product = new Category();
        $product->fill($data);
        $product->save();

        return redirect()->route('categories');
    }
}
// || empty($data['is_active'])
