@extends('master')

@section('content')

@if(count($datas)>0)
@foreach($datas as $data)
<div class="row">
    <div class="col-md-4">
       <img src="{{$data->gallery}}"  alt="{{$data->name}}"   style="object-fit: contain; height:400px; width:400px;"/>
    </div>
    <div class="col-md-4">
        <h2>{{$data->name}}</h2>

        <p>{{$data->description}}</p>
        <p>{{$data->price}}</p>

        <a href="/addtocart/{{$data->id}}"><button class="btn btn-secondary"> Add to cart</button></a>
        <button class="btn btn-primary">Buy now</button>



    </div>
</div>
@endforeach

@else
    <h2>No result Found</h2>
@endif
@endsection