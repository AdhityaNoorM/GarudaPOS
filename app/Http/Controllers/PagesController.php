<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PagesController extends Controller
{
    public function dashboard()
    {
       return view('dashboard');
    }

    public function transaksi()
    {
       return view('transaksi');
    }

    public function transaksidetail()
    {
       return view('transaksidetail');
    }

    public function transaksiriwayat()
    {
       return view('transaksiriwayat');
    }

    public function produk()
    {
       return view('produk');
    }

    public function statistikproduk()
    {
       return view('statistikproduk');
    }

    public function tambahproduk()
    {
       return view('addproduk');
    }

    public function detailproduk()
    {
       return view('detailproduk');
    }
}