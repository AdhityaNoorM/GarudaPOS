<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\modelProduk;

use DB;

use Illuminate\Http\Request;

use View;

class controllerProduk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $produk = modelProduk::all();
          $produk = DB::table('view_produk')->get();
       return View::make('produk')
          ->with('produk',$produk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modelProduk  $modelProduk
     * @return \Illuminate\Http\Response
     */
    public function show(modelProduk $modelProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modelProduk  $modelProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(modelProduk $modelProduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modelProduk  $modelProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modelProduk $modelProduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modelProduk  $modelProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(modelProduk $modelProduk)
    {
        //
    }
}
