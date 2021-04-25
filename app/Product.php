<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;

class Product extends Model
{
    public function category(){
    	return $this->belongsTo(Category::class);
    }
}
