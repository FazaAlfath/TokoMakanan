<?php

namespace App\Http\Controllers;

use Str;
use DB;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    public function index(){

        $products_top = DB::table('product')->limit(12)->orderBy('id', 'DESC')->get();
        $products = DB::table('product')->limit(3)->orderBy('id', 'ASC')->get();

        return view('welcome', compact('products','products_top'));
    }

    public function store(){

		$file = request()->file('image');
 
		$file_name = time()."_".$file->getClientOriginalName();
        
        $path = public_path('product');

        $file->move($path, $file_name);
        
        DB::table('product')->insert([
            'name'  => request('name'),
            'description'  => request('description'),
            'price'  => request('price'),
            'stock'  => request('stock'),
            'rating'  => request('rating'),
            'slug'  => Str::slug(request('name')),
            'img'   => $file_name
        ]);

        return back(); 
    }

    public function edit($id){

        $product = DB::table('product')->where('id', $id)->first();

        return response()->json($product);

        $product = $request->validate([
            'name'  => request('name'),
            'description'  => request('description'),
            'price'  => request('price'),
            'stock'  => request('stock'),
            'rating'  => request('rating'),
            'slug'  => Str::slug(request('name')),
            'img'   => $file_name
        ]);

        DB::table('product')->whereId($request->id)->update($products);

        return redirect('admin');
    }
    

    public function update(){

        $file = request()->file('image');
 
		$file_name = time()."_".$file->getClientOriginalName();
        
        $path = public_path('product');

        $file->move($path, $file_name);

        DB::table('product')->where('id', request('id'))->update([
            'name' => request('name'),
            'description' => request('desc'),
            'price' => request('price'),
            'stock' => request('stock'),
            'rating' => request('rating'),
            'img'   => $file_name
        ]);

        return back();
    }

    public function detail_product($slug){

        $product = DB::table('product')->where('slug', $slug)->first();

        return view('detail-product', compact('product'));
    }

    public function destroy($id){

        DB::table('product')->where('id', $id)->delete();

        return back();
    }

}
