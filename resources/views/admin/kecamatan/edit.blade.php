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
                        Edit Data Kecamatan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kecamatan.update', $kecamatan->id) }}" method="post">
                            <!-- <input type="hidden" name="_method" value="PUT"> -->
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <input type="text" name="nama_kecamatan" value="{{ $kecamatan->nama_kecamatan }}"
                                    class="form-control @error('nama_kecamatan') is-invalid @enderror">
                                @error('nama_kecamatan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kabupaten / Kota</label>
                                <select class="form-control" name="id_kota" id="exampleFormControlSelect1">
                                    @foreach ($kota as $data)
                                        <option value="{{ $data->id }}" @if ($data->nama_kota == $kecamatan->kota->nama_kota) selected @endif>
                                            {{ $data->nama_kota }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <a href="{{ url()->previous() }}"
                                    class="fas fa-arrow-alt-circle-left btn btn-outline-secondary"> Kembali</a>
                                <button type="submit" class="far fa-save btn btn-outline-primary"> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
