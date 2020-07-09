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

}
