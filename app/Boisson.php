<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    //
    protected $fillable = ['name','price'];
    
    public function recettes(){
        return $this->hasMany('App\Recette');
    }
}
