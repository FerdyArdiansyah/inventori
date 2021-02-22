<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profil;

class ProfilController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $profils = Profil::all();

        return view('profil.index',compact('profils'));
    }

    public function create()
    {
        return view('profil.create');
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);

        return view('profil.edit',compact('profil'));
    }

    public function store(Request $request)
    {
        $profil = Profil::create([
            'nama'=>$request->nama,
            'usia'=>$request->usia,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'hobi'=>$request->hobi,

        ]);

        flash()->success('Data profil berhasil di buat');

        return redirect()->back();
    
    }

    public function update(Request $request,$id)
    {
        $profil = Profil::where('id',$id)->first();

        $profil->nama = $request->input('nama');
        $profil->usia = $request->input('usia');
        $profil->tempat_lahir = $request->input('tempat_lahir');
        $profil->tanggal_lahir = $request->input('tanggal_lahir');
        $profil->jenis_kelamin = $request->input('jenis_kelamin');
        $profil->hobi = $request->input('hobi');

        $profil->save();

        flash()->success('Profil berhasil di ubah');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);
        $profil->delete();

        flash()->success('Profil berhasil di hapus');
        return redirect()->back();  
    }  

    public function show($id)
    {
        $profil = Profil::findOrFail($id);

        return view('profil.detail', compact('profil'));
    }
}
