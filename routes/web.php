<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Helpers\RouteHelper;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$route = RouteHelper::RouteData();

Route::get('/', function() {

    $blog = Blog::all();

    return view('blog.page', compact('blog'));
    
});

Route::prefix('{route}')->group(function() use($route) {
    Route::get('/', function() use($route) {
        try {
            $data = array_filter($route, function($v, $k) {
                return $v['name'] == request()->segment(1);
            }, ARRAY_FILTER_USE_BOTH);

            if(count($data) > 0) {
                $id = array_values($data)[0]['id'];

                $blog = Blog::where('route_id', $id)->get();

                return view('blog.page', compact('blog'));
            } else {
                return response()->json('Page Tidak Ada');
            }

        } catch(ModelNotFoundException $e) {
            return response()->json($e->getMessage());
        }
    });
});
