<?php

namespace App\Http\Controllers;

use DB;
use Str;
use Hash;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $products = DB::table('product')->paginate(5);

        return view('admin.index', compact('products'));
    }

    public function login(){
        // dd(Hash::make('admin123'));

        if(request()->session()->has('user-logged')){
            return redirect('admin');
        }
        return view('admin.login');
    }

    public function login_post(){

        $username = Str::lower(request('username'));
        $password = request('password');


        if($user = DB::table('users')->where('username', $username)->first()){

            if(Hash::check($password, $user->password)){

                request()->session()->put('user-logged', true);

                return redirect('/admin');
            }
        }

    }

    public function logout(){

        session()->forget('key');
        return redirect('/login');
    }

    public function get_product(){
        
        $products = DB::table('product')->get();
        return view('product.index', compact('products'));
    }

    
}
