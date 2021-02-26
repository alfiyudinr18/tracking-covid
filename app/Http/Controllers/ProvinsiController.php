<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $provinsi = Provinsi::all();
        return view('provinsi.index',compact('provinsi'));
    }

    public function create()
    {
        return view('provinsi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_provinsi' => 'required|unique:provinsis',
            'nama_provinsi' => 'required|unique:provinsis'
        ], [
            'kode_provinsi.required' => 'Kode provinsi Harus Di Isi!',
            'kode_provinsi.unique' => 'Kode provinsi Sudah Terpakai!',
            'nama_provinsi.required' => 'Nama provinsi Harus Di Isi!',
            'nama_provinsi.unique' => 'Nama provinsi Sudah Terpakai!'
        ]);
       
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with('toast_success', 'Provinsi berhasil dibuat!');
    }

    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show',compact('provinsi'));
    }

    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit',compact('provinsi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_provinsi' => 'required',
            'nama_provinsi' => 'required'
        ], [
            'kode_provinsi.required' => 'Kode provinsi Harus Di Isi!',
            'nama_provinsi.required' => 'Nama provinsi Harus Di Isi!',
        ]);
       
       
        $this->validate($request,$rules,$this->message);
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with('toast_success', 'Provinsi berhasil diedit!');
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id)->delete();
        return redirect()->route('provinsi.index')->with('success', 'Provinsi berhasil dihapus!');
    }
}
