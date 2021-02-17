@extends('layouts.app-admin')
@section('judul')
 Kabupaten / Kota
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kabupaten / Kota
                </div>
                <div class="card-body">
                    <form action="{{route('kota.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Kabupaten / Kota</label>
                            <input type="text" name="kode_kota" class="form-control @error('kode_kota') is-invalid @enderror" value="{{old('kode_kota')}}">
                            @error('kode_kota')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <input type="text" name="nama_kota" class="form-control @error('nama_kota') is-invalid @enderror" value="{{old('nama_kota')}}">
                            @error('nama_kota')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select class="form-control @error('id_provinsi') is-invalid @enderror"" name="id_provinsi" id="">
                                @foreach($provinsi as $data)
                                    <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                                @endforeach
                            </select>
                            @error('id_provinsi')
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
