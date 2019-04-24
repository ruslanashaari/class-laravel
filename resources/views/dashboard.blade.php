@extends('partials.app')

@section('content')

<div class="jumbotron">
  <h1>Hello, Dashboard!</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>

<div class="well">
  <h4>Dashboard</h4>
  <p>Some text..</p>
</div>

<div class="row">
  <div class="col-sm-3">
    <div class="well">
      <h4>Users</h4>
      <p>1 Million</p>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="well">
      <h4>Pages</h4>
      <p>100 Million</p>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="well">
      <h4>Sessions</h4>
      <p>10 Million</p>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="well">
      <h4>Bounce</h4>
      <p>30%</p>
    </div>
  </div>
</div>

@endsection
