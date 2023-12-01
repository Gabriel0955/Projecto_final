<?php

use App\Http\Controllers\SaludosController;
use App\Http\Controllers\Inicio;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router as RoutingRouter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(SaludosController::class)->group(function(){
    
    Route::get('/chao', 'despedida');
    Route::get('/int', 'inter');


});
Route::get('/', Inicio::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
