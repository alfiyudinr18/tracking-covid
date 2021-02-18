<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kasus;
use App\Models\Rw;
use App\Models\Kota;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use DB;

class ApiController extends Controller
{
    public function indonesia(){
        $positif = DB::table('kasuses')
                ->select('positif')
                ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                ->sum('positif');
        $sembuh = DB::table('kasuses')
                ->select('sembuh')
                ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                ->sum('sembuh');
        $meinggal = DB::table('kasuses')
                ->select('meninggal')
                ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                ->sum('meninggal');

        $data = [
            'success' => true,
            'Data'    => 'Data Kasus Indonesia',
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninggal'  => $meinggal,
            'message'   => "Data Kasus Indonesia"  
        ];
          return response()->json($data,200); 
    }

    public function sumProvinsi()
    {
        $now = Carbon::now()->format('Y-m-d');
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
        $provinsi_ = DB::table('kasuses')
                ->select('kode_provinsi','nama_provinsi',
                        DB::raw('SUM(kasuses.positif) as positif'),
                        DB::raw('SUM(kasuses.sembuh) as sembuh'),
                        DB::raw('SUM(kasuses.meninggal) as meninggal'))
    			->join('rws', 'rws.id', '=', 'kasuses.id_rw')
    			->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
    			->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    			->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->whereDate('kasuses.tanggal', '=', $now)
    			->groupBy('nama_provinsi','kode_provinsi')
                ->get();
                
        $data = [
            'success' => true,
            'data' => [$provinsi,$provinsi_],
            'message' => 'Menampilkan Provinsi'
        ];
        return response()->json($data, 200);
       
    }
    
    public function getProvinsi($id)
    {
        $provinsi = DB::table('provinsis')
                ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
                ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
                ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
                ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
                ->join('kasuses', 'kasuses.id_rw', 'rws.id')
                ->select('kode_provinsi','nama_provinsi',
                    DB::raw('sum(kasuses.positif) as positif'),
                    DB::raw('sum(kasuses.sembuh) as sembuh'),
                    DB::raw('sum(kasuses.meninggal) as meninggal'),
                )
                ->groupBy('nama_provinsi','kode_provinsi')
                ->where('provinsis.id', $id)
                ->get();

        $data = [
            'status' => true,
            'message' => 'Menampilkan Provinsi',
            'data' => $provinsi,
        ];
        
        return response()->json($data, 200);
       
    }

    public function sumKota(){
        $kota = DB::table('kasuses')
                ->select('kode_kota','nama_kota',
                        DB::raw('SUM(kasuses.positif) as positif'),
                        DB::raw('SUM(kasuses.sembuh) as sembuh'),
                        DB::raw('SUM(kasuses.meninggal) as meninggal'))
    			->join('rws', 'rws.id', '=', 'kasuses.id_rw')
    			->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
    			->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
    			->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
    			->groupBy('nama_kota','kode_kota')
                ->get();
                
        $data = [
            'success' => true,
            'data' => $kota,
            'message' => 'Menampilkan Kota'
        ];
        return response()->json($data, 200);
    }

    public function sumKecamatan(){
        $kecamatan = DB::table('kasuses')
                ->select('nama_kecamatan',
                        DB::raw('SUM(kasuses.positif) as positif'),
                        DB::raw('SUM(kasuses.sembuh) as sembuh'),
                        DB::raw('SUM(kasuses.meninggal) as meninggal'))
                ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->groupBy('nama_kecamatan')
                ->get();
                
        $data = [
            'success' => true,
            'data' => $kecamatan,
            'message' => 'Menampilkan Kecamatan'
        ];
        return response()->json($data, 200);
    }

    public function sumKelurahan(){
        $kelurahan = DB::table('kasuses')
                ->select('nama_kelurahan',
                        DB::raw('SUM(kasuses.positif) as positif'),
                        DB::raw('SUM(kasuses.sembuh) as sembuh'),
                        DB::raw('SUM(kasuses.meninggal) as meninggal'))
                ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->groupBy('nama_kelurahan')
                ->get();
                
        $data = [
            'success' => true,
            'data' => $kelurahan,
            'message' => 'Menampilkan Kelurahan'
        ];
        return response()->json($data, 200);
    }

    public function global(){
        $url = Http::get('https://api.kawalcorona.com/')->json();
        $a = [];
        foreach ($url as $key => $value){
            $b = $value['attributes'];
            $data = [
                'ID' => $b['OBJECTID'],
                'Negara' => $b['Country_Region'],
                'Positif' => $b['Confirmed'],
                'Sembuh' => $b['Recovered'],
                'Meninggal' => $b['Deaths'],
            ];
            array_push($a, $data);
        }
        $res = [
            'success' => true,
            'Data Global' => $a,
            'message' => 'Menampilkan Global'
        ];
        return response()->json($res, 200);
    }

}
