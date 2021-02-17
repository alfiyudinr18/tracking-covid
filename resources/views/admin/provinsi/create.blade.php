@extends('layouts.app-admin')
@section('judul')
Provinsi
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <b>Tambah Data Provinsi</b>
                </div>
                <div class="card-body">
                    <form action="{{route('provinsi.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Provinsi</label>
                            <input type="text" name="kode_provinsi" class="form-control @error('kode_provinsi') is-invalid @enderror" value="{{old('kode_provinsi')}}">
                            @error('kode_provinsi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control @error('nama_provinsi') is-invalid @enderror" value="{{old('nama_provinsi')}}">
                            @error('nama_provinsi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="far fa-save btn btn-outline-primary"> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection