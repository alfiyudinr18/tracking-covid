@extends('layouts.app-admin')
@section('judul')
 Kelurahan / Desa
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Data Kelurahan
                    <a href="{{route('kelurahan.create')}}" class="fas fa-plus-square btn btn-outline-dark float-right">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kelurahan / Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kelurahan as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_kelurahan}}</td>
                                    <td>{{$data->kecamatan->nama_kecamatan}}</td>
                                    <td>
                                        <form action="{{route('kelurahan.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kelurahan.edit',$data->id)}}" class="fas fa-edit btn btn-outline-success"></a> |
                                            <button type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="fas fa-trash-alt btn btn-outline-danger"></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
