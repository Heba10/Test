<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

use App\Product;

class ProductController extends Controller
{
    public function index() {

       //return Product::all();
       $products=Product::all();
       $productResource =ProductResource::collection($products);
       Product::paginate(5);

       return $productResource;

    }

    public function show() {

        $productId =request()->product;
        $product =Product::find($productId);
        return new ProductResource($product);
      }
  
      
      public function store(ProductRequest $request) {
  
        $product = Product::create($request->only(['title', 'description', 'price','user_id']));
  
        return new ProductResource($product);
    }

}
