<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function index() {
        // fetch all roles from database
        $roles = Roles::all();
        return view('roles.listrole', compact('roles'));
    }

    public function create() {
        // return view for creating a new role
        return view('roles.create');
    }

    public function store(Request $request) {
        // dd($request);
        $request->validate([
            'name' =>'required',
            'description' =>'required'
        ]);

        Roles::create($request->all());
        return redirect()->route('roles');
    }
}
