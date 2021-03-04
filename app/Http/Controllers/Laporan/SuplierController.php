<?php

namespace App\Http\Controllers\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Suplier;

class SuplierController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('tgl_awal')){
            $suplier = Suplier::with('suplier')->whereBetween('created_at',[request('tgl_awal'),request('tgl_akhir')])->get();
                }

        $pdf = PDF::loadView('laporan.suplier.index', compact('suplier'))->setPaper('a4','landscape');

        return $pdf->stream('laporan_suplier.pdf');
    }
}
