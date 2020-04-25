<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    public function store($name, $ingredients, $description)
    {
       $this->name = $name; 
       $this->ingredients = $ingredients; 
       $this->description = $description; 
       $this->save();
       return $this->id;
    }
}
