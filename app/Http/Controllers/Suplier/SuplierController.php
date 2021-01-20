<?php

namespace App\Http\Controllers\Suplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuplierController extends Controller
{
    public function index()
    {
        return view('suplier.index');
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function edit()
    {
        return view('suplier.edit');
    }
}
