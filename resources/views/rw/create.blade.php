@extends('layouts.app-admin')
@section('judul')
    Rw
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Rw
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rw.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Rw</label>
                                <input type="text" name="no_rw" class="form-control @error('no_rw') is-invalid @enderror"
                                    value="{{ old('no_rw') }}">
                                @error('no_rw')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Kelurahan</label>
                                <select class="custom-select col-12 select2 @error('id_kelurahan') is-invalid @enderror"
                                    name="id_kelurahan" id="">
                                    @foreach ($kelurahan as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kelurahan }}</option>
                                    @endforeach
                                </select>
                                @error('id_kelurahan')
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
