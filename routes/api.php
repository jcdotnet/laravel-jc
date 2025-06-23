<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', function ( Request $request){
    $categories = App\Models\Category::all(); 
    return response()->json($categories);
});

/**
 * TO-DO, refactor: to move functions to SkillController to clean the routes code
 */
function get_skills( $category_id ) {
    $skills = App\Models\Skill::where('category_id', $category_id)->get();
    if ( !$skills ) {
        return response()->json(['error' => 'Skills Not Found'], 404);
    }
    return $skills;
}

Route::get('/skills',function() {
    $skills = App\Models\Skill::all();
    return response()->json($skills);
});

// Route::get('/skills/{id}',function($id) {
// // TO-DO
// });

// Route::get('/skills/{id}/experiences',function($id) {
// // TO-DO
// });

Route::get('/skills/categories',function() {
    $categories = App\Models\Category::where('slug', '!=', 'uncategorized')->get()->toArray();
    $output = [];
    foreach ($categories as $category) {
        $output []= [
            'title'     => $category['name'],
            'skills'    => get_skills( $category['id'] )
        ];
    }
    return response()->json($output);
});

Route::get('/skills/category/{categoryId}',function($categoryId) { // maybe Route::get('/categories/{id}/skills',function($id)
    
    $skills = App\Models\Skill::where('category_id', $categoryId)->get();
    if ( !$skills ) {
        return response()->json(['error' => 'Skills Not Found'], 404);
    }
    return response()->json($skills);
});

Route::get('/skills/slug/{slug}',function($slug) { // maybe Route::get('/categories/slug/{slug}/skills',function($slug)
    $category = App\Models\Category::where('slug', $slug)->get();
    if ( $category->isEmpty()) {
        return response()->json(['error' => 'Category Not Found'], 404);
    }
    $skills = get_skills( $category->first()->id );

    return response()->json($skills);
});