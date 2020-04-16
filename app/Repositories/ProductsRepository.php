<?php

namespace App\Repositories;

use App\Events\ProductUpdated;
use App\Exceptions\ProductNotFoundException;
use Illuminate\Http\Request;
use App\product;
use App\Repositories\Interfaces\ProductsRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ProductsRepository implements ProductsRepositoryInterface
{
    //
    
    public function index () {
        return product::paginate(5);
    }

    public function show($id){
        $product =  product::find($id);
        if(!$product){
            throw new ProductNotFoundException('product not found');
        }else{
            return $product;
        }
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
    ProductUpdated::dispatch(Auth::user()->name,$product->name);

    return $product;
    }

    public function delete(Request $request,$id){
        product::find($id)->delete();
    
        return 204;

    }
}
