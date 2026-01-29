<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\TaskModel;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', function () {
    return User::all();
});

Route::get('/tasks', function () {
    return TaskModel::all();
});
Route::get('/tasks/{userId}', function ($userId) {
    return TaskModel::where('user_id', $userId)->get();
});