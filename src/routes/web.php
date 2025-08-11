<?php

use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InstitutionsController;
use App\Http\Controllers\LocationsController;

Route::get('/health-check', function () {
    return response()->json(['status' => 'ok']);
});

// Route::get('/categories/sync-now', [CategoryController::class, 'syncCategories']);

Route::get('/',[IndexController::class,'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/sync', [CategoryController::class, 'syncCategories']);

Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/courses/search', [CoursesController::class, 'search']);
Route::get('/courses/sync', [CoursesController::class, 'syncCourses']);
Route::put('/courses/update-all-details', [CoursesController::class, 'updateAllCourseDetails']);
Route::get('/courses/{id}', [CoursesController::class, 'getCourseDetailsById']);
Route::get('/curso/{id}', [CoursesController::class, 'show'])->name('curso.show');

Route::get('/institutions', [InstitutionsController::class, 'index']);
Route::post('/institutions/sync', [InstitutionsController::class, 'sync']);

Route::get('/locations', [LocationsController::class, 'index']);
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contacto', 'contacto')->name('contacto');

Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');


Route::get('/mail-test', function () {
    try {
        \Illuminate\Support\Facades\Mail::raw('Este es un correo de prueba', function ($message) {
            $message->to('joseignaciomartin@gmail.com')
                ->subject('Prueba de Gmail SMTP');
        });
        return 'Correo enviado con éxito.';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
