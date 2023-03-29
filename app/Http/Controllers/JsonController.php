<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class JsonController extends Controller
{
    public function json1(){
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'            
        ]);
    }
    public function json2(){
        
        return '{"name":"Abigail","state":"CA"}';
    }
    public function products(){
        $products=Product::all();
        return response()->json($products);
    }
    public function product_list(){
        
        return view('products_list');
    }
}
