<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index()
    {
        $barang = Barang::all();
        return view('layouts.cart', compact('barang'));
    }


}
