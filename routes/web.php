<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Abcmain;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Aracislemleri;
use App\Http\Controllers\Personelislemleri;
use App\Http\Controllers\Aracata;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anasayfa',[Abcmain::class,"abcmain"])->name('anasayfa');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::prefix('personel')->middleware('auth')->group(function() {

    Route::get('/araclari',[Personelislemleri::class,"personelaraclistele"])->name('araclari');

    Route::get('/listesi',[Personelislemleri::class,"personellistele"])->name('listesi');

    Route::get('/ekle',[Personelislemleri::class,"personeleklemesayfasi"])->name('personeleklemesayfasi');
    
    Route::post('/personel-ekleme-sonuc',[Personelislemleri::class,"personelekle"])->name('personelekle');

    Route::get('/araciade',[Personelislemleri::class,"araciade"])->name('araciade');

    Route::post('/araciadesonuc',[Personelislemleri::class,"araciadesonuc"])->name('araciadesonuc');
    
    Route::get('/aracdetay',[Personelislemleri::class,"aracdetay"])->name('aracdetay');

});

Route::middleware('auth')->group(function(){

    Route::get('/araclar',[Aracislemleri::class,"araclar"])->name('araclar');

    Route::get('/aracata',[Aracata::class,"aracata"])->name('aracata');

    Route::post('/aracatamasonuc',[Aracata::class,"aracatamasonuc"])->name('aracatamasonuc');

    Route::get('/aracsil',[Aracislemleri::class,"aracsil"])->name('aracsil');
});

Route::prefix('arac')->middleware('auth')->group(function() {

    Route::get('/ekle',[Aracislemleri::class,"araceklemesayfasi"])->name('araceklemesayfasi');

    Route::post('/arac-ekleme-sonuc',[Aracislemleri::class,"araceklemesonuc"])->name('araceklemesonuc');

});



Route::fallback(function(){

    return view('notfound');

});

Route::prefix('api')->group(function(){

    Route::get('/personel',[Personelislemleri::class,'showall']);
    Route::get('/personel/{id}',[Personelislemleri::class,'show']);
    Route::post('/personel',[Personelislemleri::class,'save']);
    Route::put('/personel/{id}',[Personelislemleri::class,'update']);
    Route::delete('/personel/{id}',[Personelislemleri::class,'delete']);
    
    Route::get('/token', function () {
        return csrf_token(); 
    });
});