@extends('layouts.master')

@section('content')
		@if(Auth::check())
		<h1> Hello, {{ Auth::User()->username }}</h1>
		@else
		<h1>Hello, guest</h1>
		@endif
@stop

@section('footer')
@include('includes.footer')
@stop