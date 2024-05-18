<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
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
    public function store(profileRequest $request)
    {
        $formField =$request->validated();
        $formField['password'] = Hash::make($request->password);
        Profile::create($formField);

        return redirect()->route('profiles.index')->with('success', 'votre utilisateur est ajoutée avec succé');
    }
}
