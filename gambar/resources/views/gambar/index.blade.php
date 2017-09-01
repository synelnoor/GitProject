@extends('layouts.app')

@section('content')
       <div class="container">
           <div class="row">
               <div class="col-md-10 col-md-offset-1">
                   <div class="panel panel-default"> 
                     <div class="panel-heading">Gambar</div>
                     <div class="panel-body">
                      <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($gambar as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>
                                            <img src="{{ url('uploadgambar') }}/{{ $item->file_gambar }}" class="img-responsive" style="height: 50px; width: 80px;">
                                        </td>
                                        <td>
                                            <a href="#">edit</a>|<a href="#">delete</a>

                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                      </table>


                          <a href="{{ url('gambar/add') }}" class="btn btn-primary" >Tambah Gambar</a>
                     </div>
                   </div>
               </div>
           </div>
       </div>

       
 @endsection
 