<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('transaksi', compact('barang'));

    }
}
