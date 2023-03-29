<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::all();
        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories=Category::all();
        return view('admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input= $request->all();
        if ($request->hasFile('image')){

             $destination_path = 'public/images';
             $image = $request->file('image');
             $image_name = $image->getClientOriginalName();
             $path = $request->file('image')->storeAs($destination_path, $image_name);
             
             $input['image']= $image_name;
        }

        $newProduct= new Product();
        $newProduct->name= $request->input('name');
        $newProduct->description= $request->input('description');
        $newProduct->price= $request->input('price');
        $newProduct->category_id= $request->input('category');
        $newProduct->old_price= $request->input('old_price');
        $newProduct->quantity= $request->input('quantity');
        $newProduct->discount= $request->input('discount');
        $newProduct->image= $request->input('image');
        $newProduct->save();
        
        return redirect()->route('products.index')->with('info', 'Producto creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::findOrFail($id);
        $categories=Category::all();
        return view('admin.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product= Product::findOrFail($id);
        $product->name= $request->input('name');
        $product->description= $request->input('description');
        $product->price= $request->input('price');
        $product->category_id= $request->input('category');
        $product->old_price= $request->input('old_price');
        $product->quantity= $request->input('quantity');
        $product->discount= $request->input('discount');
        $product->image= $request->input('image');
        $product->save();
        return redirect()->route('products.index')->with('info', '¡Producto actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::findOrFail($id); //Otro metodo Product:: findOrFail all() oderBy
        $product->delete();

        return redirect()->route('products.index')->with('info', 'Producto eliminado exitosamente');
    }
}
