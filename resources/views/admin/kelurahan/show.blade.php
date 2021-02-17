@extends('layouts.app-admin')
@section('judul')
 Kelurahan / Desa
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Menampilkan Data Kelurahan / Desa
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Kelurahan / Desa</label>
                        <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input type="text" name="id_kecamatan" value="{{$kelurahan->kecamatan->nama_kecamatan}}" class="form-control" readonly>
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