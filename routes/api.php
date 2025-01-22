<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    $user = Auth::user();
    $token = $user->createToken('auth-token')->plainTextToken;

    return response()->json([
        'token' => $token,
    ]);
});




Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('companies', App\Http\Controllers\API\CompanyAPIController::class);
    Route::apiResource('employees', App\Http\Controllers\API\EmployeeAPIController::class);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});