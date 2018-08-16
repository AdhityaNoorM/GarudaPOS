<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\modelTransaksi;

use Illuminate\Http\Request;

use DB;

use View;

class controllerTransaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $transaksi = modelTransaksi::all();
         $transaksi = DB::table('riwayat_transaksi')->get();
    
      return View::make('transaksiriwayat')
         ->with('transaksi',$transaksi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\modelTransaksi  $modelTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(modelTransaksi $modelTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modelTransaksi  $modelTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(modelTransaksi $modelTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modelTransaksi  $modelTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modelTransaksi $modelTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modelTransaksi  $modelTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(modelTransaksi $modelTransaksi)
    {
        //
    }
}
