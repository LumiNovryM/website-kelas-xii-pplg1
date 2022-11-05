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
use App\Http\Controllers\Oktavia;
use App\Http\Controllers\Devi;
use App\Http\Controllers\Mahesa;
use App\Http\Controllers\Rafi;
use App\Http\Controllers\Ammar;
use App\Http\Controllers\Arkan;
use App\Http\Controllers\Fauzanalghifari;
use App\Http\Controllers\Ripal;
use App\Http\Controllers\Saady;
use App\Http\Controllers\Rafirei;
use App\Http\Controllers\Naoval;
use App\Http\Controllers\Septhea;
use App\Http\Controllers\Fadiyah;
use App\Http\Controllers\Fariz;
use App\Http\Controllers\Adhen;
use App\Http\Controllers\Wibowo;
use App\Http\Controllers\Avicena;
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

Route::get("/devi", [Devi::class, "devi"]);

Route::get("/okta", [Oktavia::class, "oktavia"]);

Route::get("/mahesa", [Mahesa::class, "mahesa"]);

Route::get("/rafi", [Rafi::class, "rafi"]);

Route::get("/amar", [Ammar::class, "ammar"]);

Route::get("/arkan", [Arkan::class, "arkan"]);

Route::get("/fauzanalghifari", [Fauzanalghifari::class, "fauzanalghifari"]);

Route::get("/ripal", [Ripal::class, "ripal"]);

Route::get("/saady", [Saady::class, "saady"]);

Route::get("/rafirei", [Rafirei::class, "rafirei"]);

Route::get("/naoval", [Naoval::class, "naoval"]);

Route::get("/septhea", [Septhea::class, "septhea"]);

Route::get("/fadiyah", [Fadiyah::class, "fadiyah"]);

Route::get("/fariz", [Fariz::class, "index"]);

Route::get("/adhen", [Adhen::class, "adhen"]);

Route::get("/wibowo", [Wibowo::class, "wibowo"]);

Route::get("/avicena", [Avicena::class, "avicena"]);