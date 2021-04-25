<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Product;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $req)
    {

    	$user = User::where(['email'=>$req->email])->first();
    	if(!$user || $req->password != $user->password)
    	{
    		echo $req->password;
    		echo $user->password;
    		return "username or password incorrect";  
        }
        else{
            $req->session()->put('user',$user);
    		return redirect('/');
    	}
    }


    function admin(Request $req){
        
        if (session('user') !== null && session('user')['is_admin'] ===1) {
            $products = new Product; 
            $data = $products->all();
            return view('/admin', ['data'=>$data]);
        }else{
            redirect('/');
        }
        
    }


    function register(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        return redirect('/login');
    }

}
