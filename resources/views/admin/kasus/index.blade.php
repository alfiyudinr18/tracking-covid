@extends('layouts.app-admin')
@section('judul')
 Kasus
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Data Kasus
                    <a href="{{route('kasus.create')}}" class="fas fa-plus-square btn btn-dark float-right"></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lokasi</th>
                                    <th>Rw</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kasus as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>Provinsi : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}<br>
                                    Kota : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>
                                    Kecamatan : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>
                                    Kelurahan : {{$data->rw->kelurahan->nama_kelurahan}}</td>
                                    <td>{{$data->rw->no_rw}}</td>
                                    <td>{{$data->positif}}</td>
                                    <td>{{$data->sembuh}}</td>
                                    <td>{{$data->meninggal}}</td>
                                    <td>{{date('d-m-Y', strtotime($data->tanggal))}}</td>
                                    <td>
                                        <form action="{{route('kasus.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <!-- <a href="{{route('kasus.show',$data->id)}}" class="fas fa-file-alt btn btn-outline-primary"> Lihat</a> | -->
                                            <a href="{{route('kasus.edit',$data->id)}}" class="fas fa-edit btn btn-success"></a> |
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


