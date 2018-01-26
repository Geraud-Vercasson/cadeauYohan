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
        // Vérifie que l'ingrédient ajouté ne soit pas déjà dans la recette de la boisson
        
        if (empty(Recette::where('boissons_id', $request->idBoisson)
                        ->where('ingredient_id', $request->idIngredient))) {
            
            Recette::create(['boisson_id' => $request->idBoisson,
                'ingredient_id' => $request->idIngredient,
                'quantite' => $request->quantite]);
        }
        
        return redirect('/recettes/' . $request->idBoisson);
    }
    
    public function edit(Recette $recette){
        echo Recette;
    }
}

