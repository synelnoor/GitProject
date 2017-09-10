@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Artikel</div>

                <div class="panel-body">
                    @if(isset($message))
                    <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    <form class="form-horizontal" action="{{ url('/artikel/add') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       

                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Judul</label>

                            <div class="col-md-6">
                                <input name="judul" type="text" class="form-control" name="judul" value="{{ old('judul') }}">

                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
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

                        <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
                            <label for="isi" class="col-md-4 control-label">Isi</label>

                            <div class="col-md-6">
                                <textarea name="isi" type="text" class="form-control" name="isi">{{ old('isi') }}</textarea> 

                                @if ($errors->has('isi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isi') }}</strong>
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
