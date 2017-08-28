@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pasien</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>RT / RW</th>
                                <th>Kelurahan</th>
                                <th>Tgl Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->hp }}</td>
                                <td>{{ $item->rt_rw }}</td>
                                <td>{{ $item->kelurahan }}</td>
                                <td>{{ date('d-M-Y', strtotime($item->tanggal_lahir)) }}</td>
                                <td>{{ ($item->jenis_kelamin == 1 ? 'Laki-laki' : 'Perempuan') }}</td>
                                <td>
                                    <a href="{{ url('/pasien/edit/'.$item->id) }}">Edit</a>|
                                    <a href="{{ url('/pasien/delete/'.$item->id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ url('pasien/add') }}" class="btn btn-primary" >tambah Pasien</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
