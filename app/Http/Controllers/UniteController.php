<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Unite;
use Illuminate\Http\Request;

class UniteController extends Controller
{
    //view for displaying the unite

    public function index() 
    {
        $unite = Unite::all();
        // dd($unite);
        return view('Unites.listunites', compact('unite'));
    }

    public function create() {
        return view('Unites.create');
    }

    public function store(Request $request) {
       $request->validate([
           'name' => 'required',
           'abreviation' => 'required',
           'status' => 'required',
           'description' => 'required'
       ]);

         $unite = new Unite();
         $unite->name = $request->name;
         $unite->abreviation = $request->abreviation;
         $unite->status = $request->status;
         $unite->description = $request->description;

            $unite->save();

            return redirect()->route('unites');
    }
}
