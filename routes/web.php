<?php

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
    return view('welcome');
});

Route::get('testmodel', function () {
	$q= App\Post::all();
    return $q;
});
Route::get('produk', function () {
	$a= App\produk::all();
	$b= App\pengguna::all();
	$c= App\pengaturan::all();
    return $a.'<br>'.$b.'<br>'.$c;
});

