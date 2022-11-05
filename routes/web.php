<?php

use App\Http\Controllers\Lumi;
use App\Http\Controllers\Rafa;
use App\Http\Controllers\Ariq;
use App\Http\Controllers\Dexie;
use App\Http\Controllers\Kemal;
use App\Http\Controllers\Atmaja;
use App\Http\Controllers\Arrafi;
use App\Http\Controllers\Tsaqif;
use App\Http\Controllers\Faiz;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/lumi', [Lumi::class, 'lumi']);

Route::get('/rafa', [Rafa::class, 'rafa']);

Route::get('/ariqs', [Ariq::class, 'ariq']);

Route::get('/dexie', [Dexie::class, 'index']);

Route::get('/kemal', [Kemal::class, 'kemal']);

Route::get('/atmaja', [Atmaja::class, 'atmaja']);

Route::get('/arrafii', [Arrafi::class, 'arra']);

Route::get('/tsaqif', [Tsaqif::class, 'tsaqif']);

Route::get("/faiz", [Faiz::class, "index"]);

Route::get("/devi", [Faiz::class, "devi"]);