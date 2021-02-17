
@extends('layouts.app-admin')
@section('judul')
 Kabupaten / Kota
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
                    Data Kabupaten / Kota
                    <a href="{{route('kota.create')}}" class="fas fa-plus-square btn btn-outline-dark float-right">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Kabupaten / Kota</th>
                                    <th>Kabupaten / Kota</th>
                                    <th>Provinsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kota as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kode_kota}}</td>
                                    <td>{{$data->nama_kota}}</td>
                                    <td>{{$data->provinsi->nama_provinsi}}</td>
                                    <td>
                                        <form action="{{route('kota.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kota.edit',$data->id)}}" class="btn btn-outline-success">Edit</a> |
                                            <button type="submit" onclick="return confirm('Aapakah Anda Yakin?')" class="btn btn-outline-danger">Hapus</button>
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
