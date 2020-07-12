<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Estudiante;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('estudiantes', function(){
    return datatables()
    ->eloquent(App\Estudiante::query())
    ->addColumn('btn','actions')->rawColumns(['btn'])
    ->toJson();
});