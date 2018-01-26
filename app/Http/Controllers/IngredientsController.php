<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index()
    {
        $allIngredients = Ingredient::all();
        return view('ingredients.index', compact('allIngredients'));
    }
    
    public function create()
    {
        return view('ingredients.create');
    }
    
    public function store(Request $request)
    {
        Ingredient::create(["name" => $request->ingredient,
            "stock" => $request->stock]);
        return self::index();
    }
    
    public function show(Ingredient $ingredient)
    {
        return view('ingredients.show', compact('ingredient'));
    }
    
    public function edit(Ingredient $ingredient)
    {
        return view('ingredients.edit', compact('ingredient'));
    }
    
    public function update(Ingredient $ingredient, Request $request)
    {
        $ingredient->update(['name' => $request->newName,
            'stock' => $request->newStock]);
        
        return self::show($ingredient);
    }
    
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();
        return redirect('/ingredients');
    }
}
