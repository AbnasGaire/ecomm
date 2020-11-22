@extends('master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="col-md-4 offset-md-4 form" method="post" action='/register'>
    @csrf

    <div class="form-group ">
        <label >Username</label>
        <input type="text"  name="username" class="form-control">
        
      </div>
      <div class="form-group ">
        <label >Email address</label>
        <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>

      <div class="form-group">
        <label >Password</label>
        <input type="password"  name="password" class="form-control" >
      </div>
      
      <button type="submit" class="btn btn-primary form-control">Submit</button>
    </form>

@endsection