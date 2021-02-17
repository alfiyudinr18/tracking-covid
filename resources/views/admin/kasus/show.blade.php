@extends('layouts.app-admin')
@section('judul')
 Kasus
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Menampilkan Data Kasus
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Positif</label>
                        <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Sembuh</label>
                        <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Meninggal</label>
                        <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">RW</label>
                        <input type="text" name="id_rw" value="{{$kasus->rw->nama_rw}}" class="form-control" readonly>
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