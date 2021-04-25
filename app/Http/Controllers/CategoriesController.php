<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    function categories(){
    	$id  = 1;
    	$categories = Category::find($id)->with('products')->get();
    	return view('phones', ['categories'=>$categories]);
    }
}
