<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Category;
use App\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){
    	$data = Product::with('category')->get();
        $categories = Category::all();
    	return view('product', ['products'=>$data],['categories'=>$categories]);
    }

    




    function detail($id){
    	$data = Product::find($id);
    	return view('detail', ['product'=>$data]);
    }
    function search(Request $req){
    	
    	$data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
    	return view('search', ['products'=>$data]);
    }

    // function addtocart(Request $req){
    //     if ($req->session()->has('user')) {
    //         $cart = new Cart;
    //         $cart->user_id=$req->session()->get('user')['id'];
    //         $cart->product_id=$req->product_id;
    //         $cart->save();
    //         return redirect('/');
    //     }else{
    //         return redirect('/login');
    //     }
    // }



    function addtocart(Request $req){
    if (session('user')!== null) {
        $id = $req->input('query');
        $product = Product::find($id);
        $cart = session()->get('cart');
        if (!$cart) {
            $cart=[
                $id =>[
                    "name" => $product->name,
                    "price" =>$product->price,
                    "image" =>$product->gallery,
                    "p_id" => $req->input('query'),
                    "user_id" => $req->session()->get('user')['id'],
                    "quantity" => 1
                ]     
            ];
            session()->put('cart', $cart);
            return redirect('/cart');
        }
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect('/cart');
        }
        $cart[$id] = [
            "name" => $product->name,
            "price" =>$product->price,
            "image" =>$product->gallery,
            "p_id" => $req->input('query'),
            "user_id" => $req->session()->get('user')['id'],
            "quantity" => 1
        ];
        session()->put('cart', $cart);
        return redirect('/cart');
    }else{
        return redirect('/login');
    }

        
    }



    function addproduct(Request $req){
        $product = new Product;
        $product->name = $req->input('name');
        $product->description =$req->input('description');
        $product->price = $req->input('price');
        $product->gallery= $req->input('image');
        $product->category = $req->input('category');
        $product->save();

        return redirect('/admin');
    }




    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }



    function deleteProduct(Request $req){
        $id = $req->input('id');
        Product::destroy($id);
        return redirect('/admin');
    }



    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }


    // function Cart(){
    //     $userId = Session::get('user')['id'];
    //     $products= DB::table('carts')->join('products', 'carts.product_id','=', 'product_id')
    //     ->where('carts.user_id', $userId)
    //     ->select('products.*')
    //     ->get();

    //     return view('cart');
    // }

    function cart(){
        $userId = Session::get('user')['id'];
        $products= DB::table('carts')
        ->join('products', 'carts.product_id','=', 'products.id')
        ->where('carts.user_id', $userId)
        ->select('products.*', 'carts.id as cart_id')
        ->distinct()
        ->get();

        
        
        // $quantity = DB::table('carts')->where('id', $id)->value('quantity');
        return view('cart', ['products'=>$products]);
        
        
    }

    function removecart($id){
        Cart::destroy($id);
        return redirect('cart');
    }

    function addqty(Request $req){
        $cart = new Cart;
        // $cart->product_id = $req->input('quantity');
        // $cart->quantity ++;
        // $cart->save();
        // $cart::where()


        
        $id = $req->input('quantity');
        $q = DB::table('carts')->where('id', $id)->value('quantity');
        $q++;
        $cart::where('id', $id)->update(array('quantity'=>$q));

        $quantity = DB::table('carts')->where('id', $id)->value('quantity');
        return view('cart', ['quantity'=>$quantity]);

        
    }


    function ordernow(){
        $userId = Session::get('user')['id'];
        $total = DB::table('carts')
        ->join('products', 'carts.product_id','=', 'products.id')
        ->where('carts.user_id', $userId)
        ->select('products.*', 'carts.id as cart_id')
        ->distinct()
        ->sum('products.price');
        return view('ordernow', ['total'=>$total]);
    }

    function orderplace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status='pending';
            $order->payment_method=$req->payment;
            $order->payment_status='pending';
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/');
        
    }

    function myorders(){

        $userId = Session::get('user')['id'];
        $products = DB::table('orders')
        ->join('products', 'orders.product_id','=', 'products.id')
        ->where('orders.user_id', $userId)
        ->get();
        return view('/myorders', ['products'=>$products]);
    
    }
}
