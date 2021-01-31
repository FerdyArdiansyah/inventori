<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Barang;
class BarangController extends Controller
{
    public function index()
    {
        $barangs = barang::all();
        
        return view('masterbarang.index', compact('barangs'));
    }
}