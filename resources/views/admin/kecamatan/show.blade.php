@extends('layouts.app-admin')
@section('judul')
 Kecamatan
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Menampilkan Data Kecamatan
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kabupaten / Kota</label>
                        <input type="text" name="id_kota" value="{{$kecamatan->kota->nama_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="fas fa-arrow-alt-circle-left btn btn-outline-secondary"> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection