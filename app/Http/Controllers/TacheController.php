<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;
use App\Models\Categorie;
use App\Http\Requests\TacheFormRequests;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $taches = Tache::with('categorie')->get();

        return view('tache.allTache', ["taches" => $taches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('tache.createTache', [
            'tache' => new Tache(),
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TacheFormRequests $request)
    {
        $tacheCreate = Tache::create($request->validated());
        return redirect()->route("allTache")->with('success', 'Formulaire soumis avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tache = Tache::findOrFail($id);
        return view('tache.tache', ['tache' => $tache]);
    }

    public function showByCategorie($categorieId)
    {
        $categorie = Categorie::findOrFail($categorieId);
        $taches = $categorie->taches; 

        return view('tache.tacheByCategorie', ['categorie' => $categorie, 'taches' => $taches]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $categories = Categorie::all();
        $tache = Tache::findOrFail($id);
        return View('tache.editTache', [
            'tache' => $tache,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TacheFormRequests $request, string $id)
    {
        Tache::find($id)->update($request->validated());
        return redirect()->route('tache', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tache = Tache::findOrFail($id);
        $tache->delete();
    
        return redirect()->route('allTache')
            ->with('success', 'Tâche supprimée avec succès');
    }
}
