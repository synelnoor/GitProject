@extends('layouts.app')

 @section('content')
 <div class="container">
  <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Gambar</div>

                <div class="panel-body">
                    @if(isset($message))
                    <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    <form class="form-horizontal" action="{{ url('/gambar/add') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Judul</label>

                            <div class="col-md-6">
                                <input nama="judul" type="text" class="form-control" name="judul" value="{{ old('judul') }}">

                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('file_gambar') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">Gambar</label>

                            <div class="col-md-6">
                                <input nama="file_gambar" type="file" class="form-control" name="file_gambar" value="{{ old('file_gambar') }}">

                                @if ($errors->has('file_gambar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file_gambar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-action text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
         </div>              
    </div>
 </div>
 @endsection