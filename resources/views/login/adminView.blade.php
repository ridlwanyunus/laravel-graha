@extends('layouts.master')

@section('judul', 'Admin | Lihat User')

@section('navbar')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Graha Site</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('getRegister') }}">Lihat User</a></li>
      <li ><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
<div class="container">
<h2>User</h2>
  <p>List of All Users in The Database:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Roles ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
    </thead>
    <tbody>
    @foreach($datas as $data)
      <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->roles_id }}</td>
        <td>{{ $data->username }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->created_at }}</td>
        <td>{{ $data->updated_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection