<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index() {
        // fetch all categories from database
        $categories = Category::all();
        return view('categories.listcat', compact('categories'));
    }

    public function create() {

        return view('categories.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' =>'required',
            'description' =>'required'
        ]);

        Category::create($request->all());

        return redirect()->route('categories');
    }
}
