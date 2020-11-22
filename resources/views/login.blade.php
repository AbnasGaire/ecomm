@extends('master')

@section('content')

@if(Session::has('err'))
<div class="alert alert-danger">
    {{session()->get('err')}}
</div>
@endif


@if(Session::has('success'))
  <div class="alert alert-primary">
    {{session()->get('success')}}
  </div>
@endif


<form class="col-md-4 offset-md-4 form" method="post" action='/login'>
@csrf
  <div class="form-group ">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary form-control">Submit</button>
</form>
@endsection