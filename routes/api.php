<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * TO-DO, refactor: to move functions to SkillRestController to clean the routes code
 */
Route::get('/skills',function() {
    $skills = App\Models\Skill::all();
    return response()->json($skills); //, 200);  
});

Route::get('/skills/{id}',function($id) {
    $skill= App\Models\Skill::find($id);
    return response()->json($skill); //, 200); 
});

Route::get('/skills/{id}/experiences',function($id) {
    $skill = App\Models\Skill::where('id', '=', $id)->with('experiences')->get();
    return response()->json($skill); 
});

Route::get('/categories',function() {
    $categories = App\Models\Category::all();
    return response()->json($categories); 
});

Route::get('/categories/skills',function() {
    $categories = App\Models\Category::where('slug', '!=', 'uncategorized')->with('skills')->get();
    return response()->json($categories);
});

Route::get('/categories/{id}',function($id) {
    $category = App\Models\Category::find($id);
    return response()->json($category);  
});

Route::get('/categories/{id}/skills',function($id) {
    
    $category = App\Models\Category::where('id', '=', $id)->with('skills')->get();
    return response()->json($category);
});

Route::get('/categories/slug/{slug}',function($slug) {
    $category = App\Models\Category::where('slug', $slug)->get();
    return response()->json($category);
});

Route::get('/categories/slug/{slug}/skills',function($slug) {
    $category = App\Models\Category::where('slug', $slug)->with('skills')->get();
    return response()->json($category);
});