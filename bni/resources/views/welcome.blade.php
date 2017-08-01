@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                    
                <div class="panel-body">
                    <img src="{{ asset('/img/logo.png')}}" style=" display: block; margin-left: auto; margin-right: auto; height: 70px; width: 200px;">
                    <h3 style="display: block; margin-left: auto; margin-right: auto; height: 70px; width: 300px;"> Wellcome to Application</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
