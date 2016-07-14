@extends('layouts.master')

@section('judul', 'Form Login')

@section('navbar')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Graha Site</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('getRegister') }}">Register</a></li>
      <li class="active"><a href="{{ route('getLogin') }}">Login</a></li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
<div class="container">
	<form class="form-horizontal" action="{{ url(action('LoginController@postLogin')) }}" method="post" >
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email address : </label>
      <div class="col-sm-4">          
        <input type="email" name="email" class="form-control" placeholder="Email address or Username" 
        required autofocus>
       </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password :</label>
      <div class="col-sm-4">          
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
      </form>
</div>
@endsection