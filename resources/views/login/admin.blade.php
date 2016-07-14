@extends('layouts.master')

@section('judul', 'Form Login')

@section('navbar')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">{{ trans('dictionary.Graha Site') }}</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('adminView') }}">{{ trans('dictionary.View User') }}</a></li>
      <li ><a href="{{ route('logout') }}">{{ trans('dictionary.Logout') }}</a></li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
<div class="container">
</div>
@endsection