<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectMembersController;
use App\Http\Controllers\ProjectsCategoriesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsCategoriesController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DesignRequestsController;


Route::post('/admin/login', [AdminController::class,'login']);


Route::get('/admin', function () {
    return response()->json(['message' => 'Hello API']);
});
