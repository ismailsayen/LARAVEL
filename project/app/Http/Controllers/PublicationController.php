<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{

    public function index()
    {
        $publications = Publication::latest()->get();
        return view('publication.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publication.create-publication');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationRequest $request)
    {
        $formField = $request->validated();
        if ($request->hasFile('image')) {
            $formField['image'] = $request->file('image')->store('publications', 'public');
        }
        $formField['id_profile']=Auth::id();
    
        Publication::create($formField);
        return to_route('profiles.index')->with('success', 'Pub added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        return view('publication.edite', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublicationRequest $request, Publication $publication)
    {
        $formField = $request->validated();
        if ($request->hasFile('image')) {
            $formField['image'] = $request->file('image')->store('publications', 'public');
        };
        $formField['id_profile']=Auth::id();
        $publication->fill($formField)->save();
        return to_route('publications.create')->with('success', 'votre Publication a été modifié avec succé');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect()->route('publications.index')->with('success', 'votre publication a été supprimer avec succé');
    }
}
