<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\InstitutionsController;
use App\Http\Controllers\LocationsController;

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories/sync', [CategoryController::class, 'syncCategories']);
Route::get('/categories/sync', [CategoryController::class, 'syncCategories']);

Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/courses/search', [CoursesController::class, 'search']);
Route::post('/courses/sync', [CoursesController::class, 'syncCourses']);
Route::put('/courses/update-all-details', [CoursesController::class, 'updateAllCourseDetails']);
Route::get('/courses/update-all-details', [CoursesController::class, 'updateAllCourseDetails']);
Route::get('/courses/{id}', [CoursesController::class, 'getCourseDetailsById']);

Route::get('/institutions', [InstitutionsController::class, 'index']);
Route::post('/institutions/sync', [InstitutionsController::class, 'sync']);

Route::get('/locations', [LocationsController::class, 'index']);