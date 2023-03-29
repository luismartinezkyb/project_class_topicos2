<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;

class SiteController extends Controller
{
    //
	public function index(){
		return view('index');
	}
	public function shop()
    {	  

    	$categories= Category::all();
        //$products=Product::all();
        // foreach ($categories as $cat) {
            
        //     //$id_cat=$cat->id;
        //     $products[$cat->name]= Product::where('category_id', $cat->id)->orderBy('id', 'asc')->get(); 
            
        //esto fue con el modelo del has many teniendo en cuenta que al crear una categoria se hace una relacion con el producto de cierta categoria      
        // }
        // foreach ($categories as $category) {
        //     echo $category->name."<br>";

        //     foreach ($category->products as $product) {
        //         echo $product->name."(".$product->price.")<br>";
        //     }

        // }
    	return view('shop', compact('categories')); 
        
    }
   	public function register()
    {
    	return  view('register'); 
    }   
    public function login()
    {   
        return  view('login'); 
    }
    public function product_details($id)
    {   
        $comments= Comment::where('product_id', $id)->get();
        $product= Product::findOrFail($id);
        return  view('products_details', compact('product', 'comments')); 
    }   



}
