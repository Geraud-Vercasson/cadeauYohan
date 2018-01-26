<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name',
                            'stock'];
    
    public function recettes(){
        return $this->hasMany('App\Recette');
    }
}
