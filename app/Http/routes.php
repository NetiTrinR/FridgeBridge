<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
Route::resource('item', 'ItemController',['except'=>['show','edit']]);
Route::get('item/destroy/{id}', 'ItemController@destroy')->name('item.destroy');
Route::get('/recipe', 'RecipeController@index')->name('recipe.index');
Route::get('/recipe/query/{query}/', 'RecipeController@searchRecipes')->name('recipe.search');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function(){
    if(Auth::guest())
        return view('welcome');
    else
        return redirect()->route('home');
})->name('home.welcome');

