<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Firma;
use App\Models\Mitarbeiter;
use App\Http\Controllers\MitarbeiterController;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'firmas' => Firma::all(),
        'mitarbeiters' => Mitarbeiter::all(),
    ]);
});

Route::post('/', function(){
    redirect('/');
});

//not used
Route::get('/Mitarbeiter/Index', function (Request $request) {
    return Inertia::render('Mitarbeiter/Index',[
        
    ]);
});


Route::get('/Mitarbeiter/Add', function () {
    return Inertia::render('Mitarbeiter/Add', [
        'id' => request('id'),
        'name' => request('name')
    ]);
});

Route::post('/Mitarbeiter/Add', [MitarbeiterController::class, 'store']);