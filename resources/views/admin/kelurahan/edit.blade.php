@extends('layouts.app-admin')
@section('judul')
 Kelurahan / Desa
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Kelurahan / Desa
                </div>
                <div class="card-body">
                    <form action="{{route('kelurahan.update',$kelurahan->id)}}" method="post">
                     <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Kelurahan / Desa</label>
                            <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control @error('nama_kelurahan') is-invalid @enderror">
                            @error('nama_kelurahan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kecamatan</label>
                            <select class="form-control" name="id_kecamatan" id="exampleFormControlSelect1">
                                @foreach($kecamatan as $data)
                                    <option value="{{$data->id}}"
                                    @if($data->nama_kecamatan == $kelurahan->kecamatan->nama_kecamatan)
                                        selected
                                    @endif
                                    >
                                    {{$data->nama_kecamatan}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <a href="{{url()->previous()}}" class="fas fa-arrow-alt-circle-left btn btn-outline-secondary"> Kembali</a>
                            <button type="submit" class="far fa-save btn btn-outline-primary"> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection