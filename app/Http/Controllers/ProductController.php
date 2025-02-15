<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unite;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //

    public function listeprod() {
        $products = Product::with(['category','unites'])->get();
        return view('product.listprod', compact('products'));
    }

    public function create() {
        $cat = Category::all();
        $unit = Unite::all();
        return view('product.createpro', compact('cat', 'unit'));
    }

    public function store(Request $request) {

        $request->validate([
            'name' =>'required',
            'price' =>'required',
            'quantity' =>'required',
            'quantity_min' =>'required',
            'description' =>'required',
            'category_id' =>'required',
            'unit_id' =>'required',
        ]);

        $code = Str::random(10);

        $product = new Product();
        $product->name = $request->name;
        $product->code = $code;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->quantity_min = $request->quantity_min;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->unit_id = $request->unit_id;

        $product->save();

        return redirect()->route('products');
    }
}
