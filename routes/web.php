<?php

use Illuminate\Support\Facades\Route;

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

Route::group( ['middleware' => ['verify.shopify']], function () {
    Route::view( '/', 'app' )->name( 'home' );
    Route::get( '/me', fn() => response()->json( ['name' => auth()->user()->name] ) );
} );
