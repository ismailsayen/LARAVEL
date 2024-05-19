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
        $formField = $request->validated();
        $formField['password'] = Hash::make($request->password);
        if($request->hasFile('image')){
            $formField['image']=$request->file('image')->store('profiles','public');
        }else {
            $formField['image'] = 'profiles/default.png';
        }
        Profile::create($formField);

        return redirect()->route('profiles.index')->with('success', 'votre utilisateur a été ajoutée avec succé');
    }
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('success', 'votre utilisateur a été supprimer avec succé');
    }
    public function afficher(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }
    public function edit(profileRequest $request, Profile $profile)
    {
        $formUpdated=$request->validated();
        $formUpdated['password'] = Hash::make($request->password);
        if($request->hasFile('image')){
            $formUpdated['image']=$request->file('image')->store('profiles','public');
        }
        $profile->fill($formUpdated)->save();
        return redirect()->route('profiles.edit',$profile->id)->with('success', 'votre utilisateur a été modifié avec succé');

    }
}
