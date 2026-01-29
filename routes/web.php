<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/iage', function () {
    // view('welcome');

    //instance Classe
    /*$assurance  = new \App\Models\Assurance();
    $assurance->libelle = "VIE";
    $assurance->montant = 10000000;
    $assurance->bonus = 5;
    $assurance->save();*/

    $assurances = \App\Models\Assurance::all();
    foreach ($assurances as $a ){
        echo $a->libelle;
    }

   $assurance =   \App\Models\Assurance::find(5);

    $assurance->libelle = "AUTO";
    $assurance->save();

   //dd($assurance);


  // $assurance->delete();



});

//Protocole http

Route::get('/', function () {
    return redirect('/assurance');
});

Route::get("/assurance",[\App\Http\Controllers\AssuranceController::class,'index'])->name('assurance');
Route::get('/addAssurance',[\App\Http\Controllers\AssuranceController::class,'create'])->name('addAssurance');
Route::post('/storeAssurance',[\App\Http\Controllers\AssuranceController::class,'store'])->name('storeAssurance');
Route::delete('deleteAssurance/{id}',[\App\Http\Controllers\AssuranceController::class,'destroy'])->name('deleteAssurance');
Route::get('/editAssurance/{id}',[\App\Http\Controllers\AssuranceController::class,'edit'])->name('editAssurance');
Route::put('/updateAssurance',[\App\Http\Controllers\AssuranceController::class,'update'])->name('updateAssurance');

//Route::get("/type-assurance",[\App\Http\Controllers\TypeAssuranceController::class,'index'])->name('type-assurance');

Route::resource('type-assurance',\App\Http\Controllers\TypeAssuranceController::class);
