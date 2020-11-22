@extends('master')

@section('content')
{{-- <h2>Hello  {{session()->get('user')->name}}</h2> --}}

{{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner cara">
    

      @foreach($items as $item)
      <div class="carousel-item {{$item->id == 1 ? 'active' :''}}">
        <img  src="{{ $item->gallery }}" class="d-block w-100 img-cara" alt="{{$item->name}}" height=
        '70%'>
      </div>
      @endforeach
     
    <a class="carousel-control-prev arrow" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next arrow" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> --}}


  {{-- <div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    @foreach($items as $item)
    <div class="carousel-inner">
      
      <div class="carousel-item {{$item->id == 1 ? 'active' :''}}">
        <img  src="{{ $item->gallery }}" class="d-block w-100 img-cara" alt="{{$item->name}}" height=
        '70%'>
      </div>
      
      
    </div>
    @endforeach --}}
  
    {{-- <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon icon"></span>
    </a>
  
  </div> --}}

  <div class="hero">
    <div class="hero-container">
      <h1>Best Ecommerce <span class="hero-span">site</span> in the World</h1>
      <p>We believe in quality product not in profit</p>
      <p>Thanks for visiting our <span class="hero-span">site</span></p>
    </div>
  

  </div>
  
  
  <div class="card-info">
    @foreach($items as $item)
    <a href="detail/{{$item->id}}">
      <div class="card " style="width: 18rem;">
      <img src="{{$item->gallery}}" class="card-img-top" alt="..." height="300px;">
      <div class="card-body">
        
        <p class="card-text">Rs:&nbsp;{{$item->price}}</p>
        
      </div>
    </div>
  </a>
    @endforeach
  
  </div>
  
 
@endsection