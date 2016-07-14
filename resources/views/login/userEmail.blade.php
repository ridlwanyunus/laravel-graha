@extends('layouts.master')

@section('judul', 'Form Login')

@section('navbar')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">{{ trans('dictionary.Graha Site') }}</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('pageEmail') }}">{{ trans('dictionary.Send Email') }}</a></li>
      <li ><a href="{{ route('logout') }}">{{ trans('dictionary.Logout') }}</a></li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
<div class="container">
			<form class="form-horizontal" action="{{ url(action('UserController@sendEmail')) }}" method="get">
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">{{ trans('dictionary.To') }}:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="to" name="to" placeholder="Enter to">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-sm-2" for="email">Cc:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="cc" name="cc" placeholder="Enter cc">
                </div>
              </div>
                <div class="form-group">
                <label class="control-label col-sm-2" for="email">Bcc:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="bcc" name="bcc" placeholder="Enter bcc">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="subject">{{ trans('dictionary.Subject') }}:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="content">{{ trans('dictionary.Content') }}:</label>
                <div class="col-sm-10">
                  <textarea rows="10" cols="150" id="content" name="content" placeholder="Describe yourself here..."></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">{{ trans('dictionary.Submit') }}</button>
                </div>
              </div>
            </form>
</div>
@endsection