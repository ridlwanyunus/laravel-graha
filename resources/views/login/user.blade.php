@extends('layouts.master')

@section('judul', 'Dashboard User')

@section('navbar')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Graha Site</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="{{ route('pageEmail') }}">Kirim Pesan</a></li>
      <li ><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
<div class="container">
</div>
@endsection