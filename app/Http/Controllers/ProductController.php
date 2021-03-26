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

    public function index2(){
        $buyers = DB::table('buyer')->limit(12)->orderBy('id', 'DESC')->get();

        return view('admin/backup', compact('buyers',));
    }

    public function search(Request $request){
        $search = $request->get('search');

        $products_top = DB::table('product')->where('name', 'LIKE', "%{$search}%")->orderBy('id', 'DESC')->get();
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

    public function backup(){

		$file_name = time()."_".$file->getClientOriginalName();
        
        $path = public_path('buyer');

        $file->move($path, $file_name);
        
        DB::table('buyer')->insert([
            'nama_pembeli'  => request('nama_pembeli'),
            'pesanan'  => request('pesanan'),
            'alamat'  => request('alamat'),
            'pengiriman'  => request('pengiriman'),
            'total_harga'  => request('total_harga'),
        ]);

        return back(); 
    }

    public function edit($id){

        $products = DB::table('product')->where('id', $id)->first();

        return response()->json($products);

        $product = $request->validate([
            'name'  => request('name'),
            'description'  => request('description'),
            'price'  => request('price'),
            'stock'  => request('stock'),
            'rating'  => request('rating'),
            'slug'  => Str::slug(request('name')),
            'img'   => $file_name
        ]);

        DB::table('product')->whereId($request->id)->update($product);

        return redirect('admin');
    }

    public function edit2($id){

        $buyers = DB::table('buyer')->where('id', $id)->first();

        return response()->json($buyers);

        $buyer = $request->validate([
            'nama_pembeli'  => request('nama_pembeli'),
            'alamat'  => request('alamat'),
            'pesanan'  => request('pesanan'),
            'pengiriman'  => request('pengiriman'),
            'total_harga'  => request('total_harga'),
        ]);

        DB::table('product')->whereId($request->id)->update($buyer);

        return redirect('admin/backup');
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

    public function update2(){

		$file_name = time()."_".$file->getClientOriginalName();
        
        $path = public_path('buyer');

        $file->move($path, $file_name);

        DB::table('buyer')->where('id', request('id'))->update([
            'nama_pembeli'  => request('nama_pembeli'),
            'alamat'  => request('alamat'),
            'pesanan'  => request('pesanan'),
            'pengiriman'  => request('pengiriman'),
            'total_harga'  => request('total_harga'),
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

    public function destroy2($id){

        DB::table('buyer')->where('id', $id)->delete();

        return back();
    }

}
