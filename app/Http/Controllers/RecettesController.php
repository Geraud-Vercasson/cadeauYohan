<?php

namespace App\Http\Controllers;

use App\Boisson;
use App\Recette;
use Illuminate\Http\Request;

class RecettesController extends Controller
{
    public function index(){
        $boissons = Boisson::all();
        return view('recettes.index', compact('boissons'));
    }
    public function show(Boisson $boisson){
        
        $recetteCollection = Recette::where('boisson_id', $boisson->id)->get();
        if(empty($recetteCollection)){
            redirect('/recettes/create');
        }
        dump($recetteCollection);
            return view('recettes.show', compact('recetteCollection', 'boisson'));
    }
    
    public function create(){
        $boissons = Boisson::doesntHave('recettes')->get();
        return view('recettes.create', compact('boissons'));
    }
    
    public function store(Request $request){
    
    }
}
