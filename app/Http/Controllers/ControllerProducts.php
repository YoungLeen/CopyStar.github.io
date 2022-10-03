<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerProducts extends Controller
{
    public function index(){
        $product =  DB::select('SELECT * FROM `products`');
        return view('catalog', ['products' => $product]);
    }
    public function productDetails(Request $request){
        $product = DB::table('products')->where('id', '=', $request->id)->get();
        return view('product', ['product'=>$product]);
    }

}
