@extends('layouts.app-admin')
@section('judul')
 Rw
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Menampilkan Data Rw
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Rw</label>
                        <input type="text" name="no_rw" value="{{$rw->no_rw}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kelurahan</label>
                        <input type="text" name="id_kelurahan" value="{{$rw->kelurahan->nama_kelurahan}}" class="form-control" readonly>
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