<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('test', function(){
//     return response()->json([
//         'name' => 'Samuele',
//         'surname' => 'Madrigali'
//     ]);
// });

//api/projects
Route::get('projects', [ProjectController::class, 'index']);
//api/projects/vuejs
Route::get('projects/{slug}', [ProjectController::class, 'show']);