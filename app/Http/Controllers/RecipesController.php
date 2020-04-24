<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function create()
    {

    }
    public function index()
    {
        $recipes = new \App\Recipes();

        return view('recipes.index', ['recipes'=>$recipes->simplePaginate('10')]);
    }
    public function read(Request $req)
    {
        //make 'data';
        return view('recipes.read', ['data'=>null]);
    }
    public function update()
    {
        //
    }
    public function delete()
    {
        //
    }

}
