@extends('layouts.app-admin')
@section('judul')
    Kelurahan / Desa
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kelurahan / Desa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kelurahan.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Kelurahan / Desa</label>
                                <input type="text" name="nama_kelurahan"
                                    class="form-control @error('nama_kelurahan') is-invalid @enderror"
                                    value="{{ old('nama_kelurahan') }}">
                                @error('nama_kelurahan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <select class="form-control @error('id_kecamatan') is-invalid @enderror" name="id_kecamatan"
                                    id="">
                                    @foreach ($kecamatan as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kecamatan }}</option>
                                    @endforeach
                                </select>
                                @error('id_kecamatan')
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
