<?php

use Illuminate\Support\Facades\Response;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/download/whitepaper', function () {
    $file= public_path(). "/whitepaper/Cashtree_Whitepaper_Public_Dec2022.pdf";
    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, 'Cashtree_Whitepaper.pdf', $headers);
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('setlang/{locale}',function($lang){
    \Session::put('locale',$lang);
    return redirect()->back();
});