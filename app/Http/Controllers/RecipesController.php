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
        return view('recipes.index');
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
