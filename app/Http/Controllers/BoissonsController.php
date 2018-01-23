<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;

class BoissonsController extends Controller
{
    //
    public function show(){
        
        $listeBoissons = Boisson::all();
        
        return view('boissons.liste', compact('listeBoissons'));
        
    }
    
    public function add(Request $request){
        
        Boisson::create(['name'=> $request->input('newBoisson'), 'price' => $request->input('newPrice')]);
        
        return self::show();
    }
    
    public function editPage($id){
        $boisson = Boisson::find($id);
        return view('boissons.edit', compact('boisson'));
    }
    
    public function edit(Request $request, $id){
        $boisson = Boisson::find($id);
        $boisson->name = $request->newName;
        $boisson->price = $request->newPrice;
    
        $boisson->save();
        
        return self::show();
    }
    
    public function deletePage($id){
        $boisson = Boisson::find($id);
        
        return view('boissons.delete', compact('boisson'));
    }
    
    public function delete($id){
        Boisson::find($id)->delete();
        
        return self::show();
    }
    
    public function sortById(){
        $listeBoissons = Boisson::orderBy('id')->get();
        return view('boissons.liste', compact('listeBoissons'));
    }
    
    public function sortByName(){
        $listeBoissons = Boisson::orderBy('name')->get();
        return view('boissons.liste', compact('listeBoissons'));
    }
    
    public function sortByPrice(){
        $listeBoissons = Boisson::orderBy('price')->get();
        return view('boissons.liste', compact('listeBoissons'));
    }
}
