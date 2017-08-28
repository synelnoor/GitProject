@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Pasien</div>

                <div class="panel-body">
                    @if(isset($message))
                    <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    <form class="form-horizontal" action="{{ url('/pasien/add') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="id" class="col-md-4 control-label">ID Pasien</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{ $kode }}" readonly>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama Pasien</label>

                            <div class="col-md-6">
                                <input nama="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}">

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat Pasien</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="alamat">{{ old('alamat') }}</textarea>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                            <label for="hp" class="col-md-4 control-label">Nomor Telepon</label>

                            <div class="col-md-6">
                                <input hp="hp" type="text" class="form-control" name="hp" value="{{ old('hp') }}">

                                @if ($errors->has('hp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rt') ? ' has-error' : '' }}">
                            <label for="rt" class="col-md-4 control-label">RT Pasien</label>

                            <div class="col-md-6">
                                <input rt="rt" type="text" class="form-control" name="rt" value="{{ old('rt') }}">

                                @if ($errors->has('rt'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rt') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kelurahan') ? ' has-error' : '' }}">
                            <label for="kelurahan" class="col-md-4 control-label">kelurahan Pasien</label>

                            <div class="col-md-6">
                                <input kelurahan="kelurahan" type="text" class="form-control" name="kelurahan" value="{{ old('kelurahan') }}">

                                @if ($errors->has('kelurahan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelurahan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input date="date" type="text" class="form-control" name="date" value="{{ old('date') }}">

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                            <label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <select name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="1">Laki-Laki</option>
                                    <option value="0">Perempuan</option>
                                </select>

                                @if ($errors->has('jenis_kelamin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
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
