<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Roles;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function index() {
        $utilisateur = Utilisateur::all();
        return view('utilisateur.listutil', compact('utilisateur'));
    }

    public function create() {
        return view('utilisateur.create');
    }

    public function store(Request $request) {

        $messag = "votre compte est creer avec success";
        // validate the data before storing it in the database
        $request->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required|email',
            'password' => 'required'
        ]);

        // create a new utilisateur and save it in the database
        $utilisateur = new Utilisateur();
        $utilisateur->first_name = $request->first_name;
        $utilisateur->last_name = $request->last_name;
        $utilisateur->email = $request->email;
        $utilisateur->password =  bcrypt($request->password); // Hash the password before storing it

        $utilisateur->save();

        Mail::to($utilisateur->email)->send(new SendMail($utilisateur,$messag));

        // redirect to the utilisateur list page
        return redirect()->route('login');
    }
    public function Rolesasign($id) {
        $utilisateur = Utilisateur::find($id);
        $roles = Roles::all();
        return view('utilisateur.rolesassig', compact('roles','utilisateur'));
    }

    public function Rolesutilisateur(Request $request, $id) {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->roles()->attach($request->roles_id);
    
        return redirect()->route('utilisateur');
    }
}
