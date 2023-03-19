<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return view('product');
    }
    public function add(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->image = $request->image;
        $product->save();

        return back()->with('notification', 'Product has been saved successfully!');
    }
}
