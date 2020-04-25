<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function create(Request $req)
    {
        $temp = new \App\Recipes;
        $modIngredients = 
            explode(',', $req->input('ingredients'));
        $modIngredients = json_encode($modIngredients);
        
        $id = $temp->store(
            $req->input("name"),
            $modIngredients,
            $req->input('description')
        );
        return view('recipes.success', ['data'=>$id]);
    }
    public function index()
    {
        $recipes = new \App\Recipes();

        return view('recipes.index', ['recipes'=>$recipes->simplePaginate('10')]);
    }
    public function read($id)
    {
        $data = new \App\Recipes;
        $recipe = $data->where('id', '=', $id)->first();//->get();
        if(isset($recipe->id))
        {
            return view('recipes.read', ['data'=>$recipe]);
        }
        else
        {
            return view('recipes.error', ['error'=>'Recipe does not exist!']);
        }
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
