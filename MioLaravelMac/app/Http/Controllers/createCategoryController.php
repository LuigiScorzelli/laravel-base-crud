<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class createCategoryController extends Controller
{

    public function products(Category $category){

        return view('categories.products', ['category' => $category]);
    }

    public function create(){
        $data = [
            'title' => 'Crea categoria'
        ];

        return view('categories.createCategory', $data);
    }

    public function save(Request $request){

        $data= $request->all();

        if(empty($data['name'])){
            return 'error';
        }

        $category = new Category();

        $category->name = $data['name'];
        $category->category_slug = str_slug($data['name']);
        $category->is_active = (!empty($data['is_active']) && $data['is_active'] == 'ok') ? true : false;
        $category->description = $data['description'];

        // $product->fill($data);
        $category->save();

        return redirect()->route('categories');
    }

        // cancella la caregoria per id

    public function delete(Category $id){

        $id->delete();

        return redirect()->route('categories');

    }

        // modifica e salva la categoria modificate per id

    public function edit(Category $id){
        // $categorys = Category::find($category);
        $category = $id;

        return view('categories.editCategory', ['category' => $category]);
    }

    public function change(Request $request, Category $id){

        $data = $request->all();
        // controllo se i dati sono stati modificati
        $dataUpdate = [];

        if($data['name'] != $id->name){
            $dataUpdate['name'] = $data['name'];
        }

        if($data['description'] != $id->description){
            $dataUpdate['description'] = $data['description'];
        }

        if($id->is_active == 'ok' && !empty($data['is_active'])){
            $dataUpdate['is_active'] = true;
        }
        else if(!$id->is_active == null && empty($data['is_active'])){
            $dataUpdate['is_active'] = false;
        }
        // dd($dataUpdate['is_active']);
        $id->update($dataUpdate);

        return redirect()->route('categories');

    }
}
