@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Artikel</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>
                                    <a href="{{ url('/artikel/edit/'.$item->id) }}">Edit</a>|
                                    <a href="{{ url('/artikel/delete/'.$item->id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ url('artikel/add') }}" class="btn btn-primary" >Tambah Artikel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
