<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Kasus;
use DB;

class ReportController extends Controller
{

    public function index(){
        $positif = DB::table('kasuses')
                ->select('positif')
                ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                ->sum('positif');
        $sembuh = DB::table('kasuses')
                ->select('sembuh')
                ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                ->sum('sembuh');
        $meninggal = DB::table('kasuses')
                ->select('meninggal')
                ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                ->sum('meninggal');
        $provinsi = DB::table('kasuses')
                ->select('kode_provinsi','nama_provinsi',
                        DB::raw('SUM(kasuses.positif) as positif'),
                        DB::raw('SUM(kasuses.sembuh) as sembuh'),
                        DB::raw('SUM(kasuses.meninggal) as meninggal'))
    			->join('rws', 'rws.id', '=', 'kasuses.id_rw')
    			->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
    			->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    			->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
    			->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
    			->groupBy('nama_provinsi','kode_provinsi')
                ->get();
        $url = Http::get('https://api.kawalcorona.com/')->json();
        $url1 = Http::get('https://api.kawalcorona.com/indonesia')->json();
        $url2 = Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json();
        $url3 = Http::get('https://api.kawalcorona.com/positif')->json();
        $url4 = Http::get('https://api.kawalcorona.com/sembuh')->json();
        $url5 = Http::get('https://api.kawalcorona.com/meninggal')->json();
        return view('welcome', compact('positif', 'sembuh', 'meninggal', 'provinsi', 'url', 'url3', 'url4', 'url5'));
    }
}
