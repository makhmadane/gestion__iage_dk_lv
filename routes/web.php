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


Route::get("/assurance",[\App\Http\Controllers\AssuranceController::class,'index']);
