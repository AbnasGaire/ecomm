<?php
use App\Http\Controllers\ProductController;
$data=ProductController::cartdata()
?>


<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
    crossorigin="anonymous">

    <style>
    .form{
        margin-top:100px;
    }
    
    .hero-span{
        color:red;
    }
    .hero-container{
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        margin-left:20px;

    }
    .img-cara{
        object-fit:contain;
    }
    .arrow{
        background-color:black !important;
    }
    .icon{
        background-color:black;
    }
    .card-info{
        display:flex;
        flex-direction:row;
        justify-content:space-between;
        object-fit:contain;
        height:500px !important;
        margin-top:10px;
        
       
    
        
    }
    .cart{
        
        margin-left:10px;
        padding-top:5px;
        color:gray;
    }
    .hero{
      
        height:500px;
        width:100%;
        background-color:grey;
       
        
    }
    
    </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
         <div class="container">
            <a class="navbar-brand" href="/dashboard"><span style="color:red;">E</span>com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
                </li>
                @if(!session()->get('user'))
                <li class="nav-item active">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endif
                
                
                </ul>
                <form class="form-inline my-2 my-lg-0" action="/search" method="get">
                <input class="form-control mr-sm-2" type="search" name="search_data" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="cart">
                    <a href="/totalcart"><p>Cart({{$data}})</p></a>
                </div>

                <?php
                if(session()->get('user')){
                    ?>
                    <a href="/logout" ><p class="cart">Logout</p></a>

                    <p class="cart">{{session()->get('user')->name}}</p>
                <?php
                }
                ?>
                
            </div>

            </div>
            </nav>

            @yield('content')

            <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>

    </body>

</html>