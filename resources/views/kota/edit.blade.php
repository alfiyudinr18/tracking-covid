@extends('layouts.app-admin')
@section('judul')
    Kabupaten / Kota
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data Kabupaten / Kota
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kota.update', $kota->id) }}" method="post">
                            <!-- <input type="hidden" name="_method" value="PUT"> -->
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Kode Kabupaten / Kota</label>
                                <input type="text" name="kode_kota" value="{{ $kota->kode_kota }}"
                                    class="form-control @error('kode_kota') is-invalid @enderror">
                                @error('kode_kota')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Kabupaten / Kota</label>
                                <input type="text" name="nama_kota" value="{{ $kota->nama_kota }}"
                                    class="form-control @error('nama_kota') is-invalid @enderror">
                                @error('nama_kota')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Provinsi</label>
                                <select class="form-control" name="id_provinsi" id="exampleFormControlSelect1">
                                    @foreach ($provinsi as $data)
                                        <option value="{{ $data->id }}" @if ($data->nama_provinsi == $kota->provinsi->nama_provinsi) selected @endif>
                                            {{ $data->nama_provinsi }}
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
