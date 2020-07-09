<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;

use App\User;
class ProductController extends Controller
{
    public function index() {
    $products = Product::paginate(5);
    return view('products.index', [
        'products'=> $products,
        ]);
    }


    public function show()
    {
        //first 
       //take the id from url param
       $request = request();
       $productId = $request->product;
        //sec
       //query to retrieve the product by id
       $product = Product::find($productId);
      
        //theard
        //key->value 
       //send the value to the view
       return view('products.show',[
           'product' => $product,
       ]);


       
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        $brands = Brand::all();

        return view('products.create', [
            'users' => $users,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    public function store()
    {
         //get the request data
         $request = request();

         //store the request data in the db
         Product::create([
             'title' => $request->title,
             'price' => $request->price,
             'description' =>  $request->description,
             'category_id' =>  $request->category_id,
             'brand_id' =>  $request->brand_id,
         ]);

         return redirect()->route('products.index');
    }
  



}


