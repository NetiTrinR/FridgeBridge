<?php

namespace Fridge\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Fridge\Http\Requests;

class RecipeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('recipe.index');
    }

    public function searchRecipes($query){
        $html = "";
        $inFridge = Auth::user()->items()->pluck('name')->toArray();
        $results = edamam_query($query);
        foreach ($results as $recipe) {
            $foods = [];
            foreach ($recipe['ingredients'] as $ingredient) {
                $foods[] = $ingredient['food'];
            }
            $html .= view('partials.recipe', compact('foods', 'inFridge', 'recipe'))->render();
        }
        return $html;
    }
}
