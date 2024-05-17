<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function create()
    {
        return view('profiles.create');
    }
    public function store(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;

        $formField = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'bio' => 'required|string|max:1000'
        ]);
        $formField['password'] = Hash::make($password);
        Profile::create($request->post());

        return redirect()->route('profiles.index')->with('success', 'votr utilisateur est ajoutée avec succé');
    }
}
