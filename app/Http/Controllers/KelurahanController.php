<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kelurahan = Kelurahan::with('kecamatan')->get();
        return view('kelurahan.index',compact('kelurahan'));
    }

    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('kelurahan.create',compact('kecamatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelurahan' => 'required|unique:kelurahans',
        ], [
            'nama_kelurahan.required' => 'Nama Kelurahan Harus Di Isi!',
            'nama_kelurahan.unique' => 'Nama Kelurahan Sudah Terpakai!'
        ]);
        $kelurahan = new Kelurahan();
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with('toast_success', 'Kelurahan/Desa berhasil dibuat!');
    }

    public function show($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahan.show',compact('kelurahan'));
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kecamatan = Kecamatan::all();
        return view('kelurahan.edit',compact('kelurahan','kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelurahan' => 'required',
        ], [
            'nama_kelurahan.required' => 'Nama Kelurahan Harus Di Isi!'
        ]);
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with('toast_success', 'Kelurahan/Desa berhasil diedit!');;
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id)->delete();
        return redirect()->route('kelurahan.index')->with('success', 'Kelurahan/Desa berhasil dihapus!');
    }
}
