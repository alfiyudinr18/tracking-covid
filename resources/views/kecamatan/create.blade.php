@extends('layouts.app-admin')
@section('judul')
    Kecamatan
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kecamatan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kecamatan.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <input type="text" name="nama_kecamatan"
                                    class="form-control @error('nama_kecamatan') is-invalid @enderror"
                                    value="{{ old('nama_kecamatan') }}">
                                @error('nama_kecamatan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Kabupaten / Kota</label>
                                <select class="form-control @error('id_kota') is-invalid @enderror" name="id_kota" id=""
                                    value="{{ old('id_kota') }}">
                                    @foreach ($kota as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kota }}</option>
                                    @endforeach
                                </select>
                                @error('id_kota')
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
