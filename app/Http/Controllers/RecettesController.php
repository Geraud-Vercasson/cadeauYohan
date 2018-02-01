<?php

namespace App\Http\Controllers;

use App\Boisson;
use App\Ingredient;
use App\Recette;
use Illuminate\Http\Request;

class RecettesController extends Controller
{
    public function index()
    {
        $boissons = Boisson::all();
        return view('recettes.index', compact('boissons'));
    }
    
    public function show(Boisson $boisson)
    {
        
        $recetteCollection = Recette::where('boisson_id', $boisson->id)->get();
        return view('recettes.show', compact('recetteCollection', 'boisson'));
    }
    
    public function create()
    {
        $boissons = Boisson::all();
        $ingredients = Ingredient::all();
        return view('recettes.create', compact('boissons', 'ingredients'));
    }
    
    public function store(Request $request)
    {
        
        Recette::create(['boisson_id' => $request->idBoisson,
            'ingredient_id' => $request->idIngredient,
            'quantite' => $request->quantite]);
        
        return self::show(Boisson::find($request->idBoisson));
        
        
    }
    
    public function edit(Recette $recette)
    {
        $ingredients = Ingredient::all();
        return view('recettes.edit', compact('recette', 'ingredients'));
    }
    
    public function update(Recette $recette, Request $request)
    {
        $recette->update(['ingredient_id' => $request->ingredientId,
            'quantite' => $request->quantite]);
        
        return self::show($recette->boisson);
    }
    
    public function delete(Recette $recette)
    {   $boisson = $recette->boisson;
       $recette->delete();
       return self::show($boisson);
    }
}


