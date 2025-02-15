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

    //view for creating a new unite
    public function create() {
        return view('Unites.create');
    }

    //store the new unite in the database
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

    public function edit($id) {

        $unit = Unite::find($id);
        return view('Unites.updateunit', compact('unit'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'abreviation' => 'required',
            'status' => 'required',
            'description' => 'required'
        ]);

        $unite = Unite::find($id);
        $unite->name = $request->name;
        $unite->abreviation = $request->abreviation;
        $unite->status = $request->status;
        $unite->description = $request->description;
        $unite->save();

        // $unite->update([
        //     'name' => $request->name,
        //     'abreviation' => $request->abreviation,
        //    'status' => $request->status,
        //    'description' => $request->description,
        // ]);

        return redirect()->route('unites');
    }

    public function destroy($id) {
        
        $unite = Unite::find($id);
        $unite->delete();
        return redirect()->route('unites');
    }
}
