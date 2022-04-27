<?php

use App\Http\Controllers\weaponController;
use Illuminate\Support\Facades\Route;
use App\Models\weapon;


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
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/weapons', [weaponController::class, 'index']);

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        'nama1'=>'Muhammad Ilham Nor Ramadhani', 'nim1'=>'2010817110008',
        'nama2'=> 'Muhammad Hidayatullah', 'nim2'=>'2010817110012']);
});

//halaman single

Route:: get('weapons/{slug}', [weaponController::class, 'show']);