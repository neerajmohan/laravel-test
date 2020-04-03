<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    //
    
    public function index () {
        return product::all();
    }

    public function show($id){
        return product::find($id);
    }

    public function store(Request $request){
        $product = new product;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->stock=$request->stock;
        $product->price = $request->price;
        $product->save();
        return response()->json([
            "message" => "product record created"
        ], 201);
    
    }

    public function update(Request $request, $id){
        
    $product = product::findOrFail($id);
    $product->update($request->all());

    return $product;
    }

    public function delete(Request $request,$id){
        product::find($id)->delete();
    
        return 204;

    }
}
