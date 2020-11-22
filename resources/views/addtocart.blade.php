@extends('master')

@section('content')
<h1>Result of Cart</h1>
@if(count($datas)>0)
@foreach($datas as $data)

<div class="row">
    <div class="col-md-4 offset-md-2">
       <img src="{{$data->gallery}}"  alt="{{$data->name}}"   style="object-fit: contain; height:400px; width:400px;"/>
    </div>
    <div class="col-md-4">
        <h2>{{$data->name}}</h2>

        <p>{{$data->description}}</p>
        <p>{{$data->price}}</p>
        
       
        <a href="/remove/{{$data->id}}"><button class="btn btn-danger">Remove from cart</button></a>



    </div>
   
</div>

@endforeach
<a href="/buynow"><button class="btn btn-primary offset-md-2">Buy now</button></a>
@else
    <p>No data in Cart<p>

@endif

@endsection

