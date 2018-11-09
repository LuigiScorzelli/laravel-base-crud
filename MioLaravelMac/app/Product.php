<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['img', 'title', 'price', 'category_id', 'description', 'slug'];

    // un prodotto avrà una categoria
    public function category(){

        return $this->belongsTo('App\Category');
    }

}
