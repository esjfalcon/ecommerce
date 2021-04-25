<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    function categories($id){
    	
    	// $categories = Category::find($id)
    	// ->with('products')
    	// ->where('products.category_id', $id)
    	// ->get();
    	// return view('phones', ['categories'=>$categories]);
    	$categories= DB::table('products')
    	->where('category_id', $id)
    	->get();
    	return view('phones', ['categories'=>$categories]);
    }
}
