<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Kelurahan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class RwController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rw = Rw::with('kelurahan')->get();
        return view('rw.index',compact('rw'));
    }

    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('rw.create',compact('kelurahan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_rw' => 'required',
            'id_kelurahan' => 'required'
        ], [
            'id_kelurahan.required' => 'No Harus Di Isi!',
            'no_rw.required' => 'No Harus Di Isi!',
        ]);
        $rw = new Rw();
        $rw->no_rw = $request->no_rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index')->with('toast_success', 'RW berhasil dibuat!');
    }

    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        return view('rw.show',compact('rw'));
    }

    public function edit($id)
    {
        $rw = Rw::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('rw.edit',compact('rw','kelurahan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_rw' => 'required',
            'id_kelurahan' => 'required'
        ], [
            'id_kelurahan.required' => 'No Harus Di Isi!',
            'no_rw.required' => 'No Harus Di Isi!',
        ]);
        $rw = Rw::findOrFail($id);
        $rw->no_rw = $request->no_rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index')->with('toast_success', 'RW berhasil diedit!');
    }

    public function destroy($id)
    {
        $rw = Rw::findOrFail($id)->delete();
        return redirect()->route('rw.index')->with('success', 'RW berhasil dihapus!');
    }
}
