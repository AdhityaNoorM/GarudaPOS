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


Route::get('/', ['as' => 'dashboard', 'uses' => 'PagesController@dashboard']);

Route::get('transaksi', ['as' => 'transaksi', 'uses' => 'PagesController@transaksi']);

Route::get('transaksidetail', ['as' => 'transaksidetail', 'uses' => 'PagesController@transaksidetail']);

Route::get('transaksiriwayat', ['as' => 'transaksiriwayat', 'uses' => 'PagesController@transaksiriwayat']);

Route::get('produk', ['as' => 'produk', 'uses' => 'PagesController@produk']);

Route::get('statistikproduk', ['as' => 'statistikproduk', 'uses' => 'PagesController@statistikproduk']);

Route::get('tambahproduk', ['as' => 'tambahproduk', 'uses' => 'PagesController@tambahproduk']);

Route::get('detailproduk', ['as' => 'detailproduk', 'uses' => 'PagesController@detailproduk']);

Route::resource('produk','controllerProduk');

Route::resource('transaksi','produklist');

Route::resource('transaksiriwayat','controllerTransaksi');