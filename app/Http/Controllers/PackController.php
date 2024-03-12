<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function storePack( Request $request)
    {
                $request->validate([
            'title' => 'required|string',
            'contenu' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation pour l'image
        ]);

            $packs = new Pack();
            $packs->title = $request->title;
            $packs->contenu = $request->contenu;

            // Gestion du téléchargement de l'image
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->storePublicly('packs', 'public');
                $packs->image = $imagePath;
            }

            $packs->save();
            // dd($request->all());

            return redirect()->back()->with('success', 'Notification ajoutée avec succès.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pack $pack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pack $pack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pack $pack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pack $pack)
    {
        //
    }
}