<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ProdukController extends Controller
{
    public function produk() {
        $produk = Produk::all();
        return view('jual',compact('produk'));
    }
}