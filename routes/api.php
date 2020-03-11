<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    $users = App\User::all();

    return response()->json(['users' => $users]);
});

Route::get('/user/{user}', function(App\User $user){
	return response()->json(['user' => $user]);
});

Route::put('/user/{user}', function(Request $request, App\User $user) {
    $user->update($request->user);

    return response()->json(['user' => $user]);
});

Route::delete('/user/{user}', function(App\User $user){
    $user->delete();

	return response()->json(['message' => 'delete successfully']);
});

Route::post('/user', function(Request $request){
    $user = App\User::create($request->user);

	return response()->json(['user' => $user]);
});
