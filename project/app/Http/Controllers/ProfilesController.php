<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {
        $profiles = Profile::paginate(8);
        return view('profiles.profiles', compact('profiles'));
    }
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }
    public function create(Request $request)
    {

        return view('profiles.create');
    }
    public function store(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;

        $request->validate([
            'email' => 'required'
        ]);

        Profile::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'bio' => $bio
        ]);

        return redirect()->route('profiles.index')->with('success', 'votr utilisateur est ajoutée avec succé');
    }
}
