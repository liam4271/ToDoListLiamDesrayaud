<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Http\Requests\CategorieFormRequests;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categorie.allCategorie', ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie.createCategorie', ["categorie" => new Categorie()]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieFormRequests $request)
    {
        $categorieCreate = Categorie::create($request->validated());
        return redirect()->route("allCategorie")->with('success', 'Formulaire soumis avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('categorie.categorie', ['categorie' => $categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorie = Categorie::findOrFail($id);
        return View('categorie.editCategorie', ['categorie' => $categorie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategorieFormRequests $request, string $id)
    {
        Categorie::find($id)->update($request->validated());
        return redirect()->route('categorie', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();
    
        return redirect()->route('allCategorie')
            ->with('success', 'Catégorie supprimée avec succès');
    }
}
