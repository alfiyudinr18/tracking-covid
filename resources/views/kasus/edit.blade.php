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
                        Edit Data Kasus
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kasus.update', $kasus->id) }}" method="post">
                            <!-- <input type="hidden" name="_method" value="PUT"> -->
                            @csrf
                            @method('PUT')
                            <div class="mb-5">
                                @livewire('tracking',['selectedRw' => $kasus->id_rw])
                            </div>
                            <div class="form-group">
                                <label for="">Positif</label>
                                <input type="number" name="positif" value="{{ $kasus->positif }}" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">Sembuh</label>
                                <input type="number" name="sembuh" value="{{ $kasus->sembuh }}" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">Meninggal</label>
                                <input type="number" name="meninggal" value="{{ $kasus->meninggal }}" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" value="{{ $kasus->tanggal }}" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <a href="{{ url()->previous() }}"
                                    class="fas fa-arrow-alt-circle-left btn btn-outline-secondary"> Kembali</a>
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
