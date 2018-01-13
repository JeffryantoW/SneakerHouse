
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <div class="background-image">
        <img src="{{asset('b.jpg')}}" width="100%" height="1190px">
    </div>
</head>
@extends('layouts.app')
<header id="header">
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/home')}}"><img src="{{asset('logo.png')}}" alt="" /></a>
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
<br>
<div class="pemesanan">
    @if($stock)
    <img src="/shoes gallery/{{ $shoe->img }}" alt="" style="width: 800px"> <br>
    size : {{ $shoe->size }}<br>
    total harga : {{ $shoe->harga * $qty }}<br>
    Transfer ke 123456 <br>
    @else
    <h1> Maaf Stock tidak cukup</h1>
    @endif
<a href="{{url('/')}}"><button>Back</button></a>
</div>

<div class="footer5">
    Copyright Reserve (c)2017 , IT Team <br>
    Binus University
</div>
</html>