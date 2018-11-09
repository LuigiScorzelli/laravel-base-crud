<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $fillable = [ 'is_active','description', 'category_slug', 'name'];

    // una categoria avrà tanti prodotti
    public function products(){

        return $this->hasMany('App\Product');
    }
}
