@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dosen</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Profile</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>

                        <tbody>
                                
                            @foreach($data as $item)

                             
                            
                            
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->nama }}</td>
                                <td><img src="{{ url('upimg/dosimg') }}/{{ $item->img }}" class="img-responsive" style="height: 50px; width: 80px;"></td>
                                 <td>{{ $item->jabatan }}</td>
                                <td>
                                    <a href="{{ url('/dosen/edit/'.$item->id) }}">Edit</a>|
                                    <a href="{{ url('/dosen/delete/'.$item->id) }}">Delete</a>
                                </td>
                            </tr>

                           
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ url('dosen/add') }}" class="btn btn-primary" >Tambah Dosen</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
