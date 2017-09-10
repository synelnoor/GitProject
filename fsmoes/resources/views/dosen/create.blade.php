@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Dosen</div>

                <div class="panel-body">
                    @if(isset($message))
                    <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    <form class="form-horizontal" action="{{ url('/dosen/add') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input name="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}">

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                            <label for="" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input name="img" type="file" class="form-control" name="img" value="{{ old('img') }}">

                                @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                            <label for="jabatan" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                <input name="jabatan" type="text" class="form-control" name="jabatan" value="{{ old('jabatan') }}">

                                @if ($errors->has('jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan') }}</strong>
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
