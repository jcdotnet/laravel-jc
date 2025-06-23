<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', function ( Request $request){
    $categories = App\Models\Category::where('slug', '!=', 'uncategorized')->get(); 
    return response()->json($categories);
});

Route::get('/skills',function() {
    $skills = App\Models\Category::all();
    return response()->json($skills);
});

// Route::get('/skills/{experience}',function($experience) {
// // TO-DO
// });

Route::get('/skills/category/{categoryId}',function($categoryId) {
    
    $skills = App\Models\Skill::where('category_id', $categoryId)->get();
    if ( !$skills ) {
        return response()->json(['error' => 'Skills Not Found'], 404);
    }
    return response()->json($skills);
});

Route::get('/skills/slug/{slug}',function($slug) {
    $category = App\Models\Category::where('slug', $slug)->get();
    if ( $category->isEmpty()) {
        return response()->json(['error' => 'Category Not Found'], 404);
    }
    $skills = App\Models\Skill::where('category_id', $category->first()->id)->get();
    if ( !$skills ) {
        return response()->json(['error' => 'Skills Not Found'], 404);
    }
    return response()->json($skills);
});