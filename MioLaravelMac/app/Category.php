<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categorys';
    protected $fillable = [ 'is_active','description', 'category_slug', 'name'];

}
// 'is_active',
