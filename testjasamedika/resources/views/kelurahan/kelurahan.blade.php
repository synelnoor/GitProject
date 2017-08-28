@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Kelurahan</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Kota</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->kelurahan }}</td>
                                <td>{{ $item->kecamatan }}</td>
                                <td>{{ $item->kota }}</td>
                                <td>
                                    <a href="{{ url('/kelurahan/edit/'.$item->id) }}">Edit</a>|
                                    <a href="{{ url('/kelurahan/delete/'.$item->id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ url('kelurahan/add') }}" class="btn btn-primary" >tambah Kelurahan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
