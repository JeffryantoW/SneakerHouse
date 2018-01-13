@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header id="header">
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/home')}}"><img src="logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/home')}}">Home</a></li>
                            <li id="dropdown2"><a href="{{url('#')}}">S h o e s&nbsp;&nbsp;G a l l e r y</a>
                                <div id="dropdowncontent2">
                                    <a href="{{url('/sneakersgalery')}}">Nike</a>
                                    <a href="{{url('/bootsgalery')}}">Adidas</a>
                                </div>
                            </li>
                            <li><a href="{{url('/about')}}">About Us</a></li>
                            @if(!Auth::check())
                            <li><a href="{{url('/login')}}">Login</a></li>
                                <li><a href="{{url('/register')}}">Register</a></li>
                                @else
                                <li><a href="{{url('/logout')}}">Logout</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <br><br>
    <div class="member-section">
        <!--Not a member?
        <a href="Registration.html">create account</a>
        to access Market !<br>
        already member?
        <a href="#">Login!</a>-->
    </div>

<section>
    <h2 class="title text-center">Adidas</h2><br><br>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            @foreach($adidas as $a)
                <div class="single-products">
                    <div class="productinfo">
                        <img src="/shoes gallery/{{$a->img}}" alt="" />
                        <div class="productinfo1">
                        <h2>{{$a->name}}</h2>
                        <p> Size : {{$a->size}}</p>
                        <p> Price : {{$a->harga}}</p>
                        <p> Qty : {{$a->qty}}</p>
                        <br>
                        <br>
                        <br>
                        </div>
                    </div>
                    <div class="product-overlay">

                        <form action="/transaction/{{$a->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            Input Qty : <input type="number" name="qty"><br><br>
                            <input type="Submit" value="Submit">
                        </form>

                        <div class="overlay-content">
                        <!--<a href="{{url('/transaksi')}}" class="btn btn-default add-to-cart"><i class="#"></i>Read More-->
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

    <div class="footer">
        Copyright Reserve (c)2017 , IT Team <br>
        Binus University
    </div>
</div>
</body>
</html>