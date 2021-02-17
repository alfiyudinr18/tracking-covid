@extends('layouts.app-admin')
@section('judul')
Provinsi
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
                    Data Provinsi
                    <a href="{{route('provinsi.create')}}" class="fas fa-plus-square btn btn-outline-dark float-right"></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Provinsi</th>
                                    <th>Provinsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($provinsi as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kode_provinsi}}</td>
                                    <td>{{$data->nama_provinsi}}</td>
                                    <td>
                                        <form action="{{route('provinsi.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('provinsi.edit',$data->id)}}" class="fas fa-edit btn btn-outline-success"></a> |
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

