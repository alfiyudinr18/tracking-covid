<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Rw;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kasus = Kasus::with('rw.kelurahan.kecamatan.kota.provinsi')->get();
        return view('kasus.index',compact('kasus'));
    }

    public function create()
    {
        $rw = rw::all();
        return view('kasus.create',compact('rw'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'positif' => 'required',
            'sembuh' => 'required',
            'meninggal' => 'required',
            'tanggal' => 'required',
            'id_rw' => 'required'
        ], [
            'positif.required' => 'Jumlah Positif Harus Di Isi!',
            'sembuh.required' => 'Jumlah Sembuh Harus Di Isi!',
            'meninggal.required' => 'Jumlah Meninggal Harus Di Isi!',
            'tanggal.required' => 'Tangaal Harus Di Isi!',
            'id_rw.required' => 'ID RW Harus Di Isi!'
        ]);
        $kasus = new Kasus();
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->id_rw = $request->id_rw;
        $kasus->save();
        return redirect()->route('kasus.index')->with('toast_success', 'Kasus berhasil dibuat!');
    }

    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('kasus.show',compact('kasus'));
    }

    public function edit($id)
    {
        $kasus = Kasus::findOrFail($id);
        $rw = rw::all();
        return view('kasus.edit',compact('kasus','rw'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'positif' => 'required',
            'sembuh' => 'required',
            'meninggal' => 'required',
            'tanggal' => 'required',
            'id_rw' => 'required'
        ], [
            'positif.required' => 'Jumlah Positif Harus Di Isi!',
            'sembuh.required' => 'Jumlah Sembuh Harus Di Isi!',
            'meninggal.required' => 'Jumlah Meninggal Harus Di Isi!',
            'tanggal.required' => 'Tangaal Harus Di Isi!',
            'id_rw.required' => 'ID RW Harus Di Isi!'
        ]);
        $kasus = Kasus::findOrFail($id);
        $kasus->positif = $request->positif;
        $kasus->sembuh = $request->sembuh;
        $kasus->meninggal = $request->meninggal;
        $kasus->tanggal = $request->tanggal;
        $kasus->id_rw = $request->id_rw;
        $kasus->save();
        return redirect()->route('kasus.index')->with('toast_success', 'Kasus berhasil diedit!');
    }

    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id)->delete();
        return redirect()->route('kasus.index')->with('success', 'Kasus berhasil dihapus!');
    }
}
