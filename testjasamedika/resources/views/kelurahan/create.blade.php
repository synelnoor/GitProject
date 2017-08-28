@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Kelurahan</div>

                <div class="panel-body">
                    @if(isset($message))
                    <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    <form class="form-horizontal" action="{{ url('/kelurahan/add') }}" method="POST">
                        {{ csrf_field() }}
                       

                        <div class="form-group{{ $errors->has('kelurahan') ? ' has-error' : '' }}">
                            <label for="kelurahan" class="col-md-4 control-label">kelurahan</label>

                            <div class="col-md-6">
                                <input nama="kelurahan" type="text" class="form-control" name="kelurahan" value="{{ old('kelurahan') }}">

                                @if ($errors->has('kelurahan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelurahan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
                            <label for="kecamatan" class="col-md-4 control-label">kecamatan</label>

                            <div class="col-md-6">
                                <input nama="kecamatan" type="text" class="form-control" name="kecamatan" value="{{ old('kelurahan') }}">

                                @if ($errors->has('kecamatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kecamatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kota') ? ' has-error' : '' }}">
                            <label for="kota" class="col-md-4 control-label">kota</label>

                            <div class="col-md-6">
                                <input nama="kota" type="text" class="form-control" name="kota" value="{{ old('kota') }}">

                                @if ($errors->has('kota'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kota') }}</strong>
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
