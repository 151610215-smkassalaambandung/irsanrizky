<?php

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

Route::get('/test','Mycontroller@percobaan');
Route::get('/test2','Mycontroller@percobaan2');
Route::get('/test3','Mycontroller@percobaan3');
Route::get('/test4','Mycontroller@percobaan4');
Route::get('/test5','Mycontroller@percobaan5');
Route::get('/test6','Mycontroller@percobaan6');
Route::get('/{id}/','Mycontroller@percobaan7');
Route::get('/{binatang}/{pil?}/{jenis?}','Mycontroller@percobaan8');