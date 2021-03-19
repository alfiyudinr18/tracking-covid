@extends('layouts.app-admin')
@section('judul')
    Kasus
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kasus
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kasus.store') }}" method="post">
                            @csrf
                            <div class="mb-5">
                                @livewire('tracking')
                            </div>
                            <h2 class="text-center">
                                <b>Kasus</b>
                            </h2>
                            <div class="form-group">
                                <label for="">Positif</label>
                                <input type="number" name="positif"
                                    class="form-control @error('positif') is-invalid @enderror"
                                    value="{{ old('positif') }}">
                                @error('positif')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Sembuh</label>
                                <input type="number" name="sembuh"
                                    class="form-control @error('sembuh') is-invalid @enderror"
                                    value="{{ old('sembuh') }}">
                                @error('sembuh')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Meninggal</label>
                                <input type="number" name="meninggal"
                                    class="form-control @error('meninggal') is-invalid @enderror"
                                    value="{{ old('meninggal') }}">
                                @error('meninggal')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal"
                                    class="form-control @error('tanggal') is-invalid @enderror"
                                    value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="far fa-save btn btn-outline-primary float-right">
                                    Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
