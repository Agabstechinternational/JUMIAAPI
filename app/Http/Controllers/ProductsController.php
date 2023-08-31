<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller

 public function index()
 {
    $products = products::all();
    return response()->json(['product'=>$products],200)
 }
//{
    //
    //public function list();
   // {
  //      return list::all();
   // }
//}
{
    public function filter(Request $request)
    {
        // Retrieve and filter data
        $products = Product::where('price', '>', 100)->get();

        // Pass the filtered data to the view or return it as JSON
        return view('products.index', compact('products'));
    }
}
