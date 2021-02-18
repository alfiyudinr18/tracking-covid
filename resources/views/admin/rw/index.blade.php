@extends('layouts.app-admin')
@section('judul')
    Rw
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
                        Data Rw
                        <a href="{{ route('rw.create') }}" class="fas fa-plus-square btn btn-outline-dark float-right">
                            Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Rw</th>
                                        <th>Kelurahan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($rw as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->no_rw }}</td>
                                            <td>{{ $data->kelurahan->nama_kelurahan }}</td>
                                            <td>
                                                <form action="{{ route('rw.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('rw.edit', $data->id) }}"
                                                        class="fas fa-edit btn btn-outline-success"></a> |
                                                    <button type="submit" onclick="return confirm('Apakah Anda Yakin?')"
                                                        class="fas fa-trash-alt btn btn-outline-danger"></button>
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
