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

Route::get('/', function () {
    $navBar = config('headerNav');
    $footerList = config('footerList');
    $followUs = config('footerFollowUs');
    return view('layouts.master',["key"=>$navBar, "footerL"=>$footerList, "followUs"=>$followUs]);
});

Route::get('/comics', function () {
    $comics = config('comics');
    $navBar = config('headerNav');
    $shopList = config('shopList');
    $footerList = config('footerList');
    $followUs = config('footerFollowUs');
    return view('partials.series', ["comics"=>$comics,"key"=>$navBar,"shopL"=>$shopList,"footerL"=>$footerList,"followUs"=>$followUs]);
});

Route::get('/single_card/{id}', function ($id) {
    $navBar = config('headerNav');
    $footerList = config('footerList');
    $followUs = config('footerFollowUs');
    $comics = config('comics');
    if(is_numeric($id) && $id < count($comics)){
        return view('partials.comic', ["key"=>$navBar, "footerL"=>$footerList, "followUs"=>$followUs, "comic"=>$comics[$id]]);
    }else{
        abort(404);
    }
})-> name('details');
