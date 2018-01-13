@extends('layouts.app')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <div class="background-image">
                <img src="b.jpg" width="100%" height="1190px">
        </div>
</head>
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

    <div class="judul">
        <br>
        <br>
        <h2>New Arrival!</h2>
    <div class="slider">
    <input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
    <input type="radio" name="slide" class="radio-nav" id="nav-2"/>
    <input type="radio" name="slide" class="radio-nav" id="nav-3"/>
    <ul class="slide">
        <li class="slide-1">
            <img src="{{asset("/shoes gallery/c1.jpg")}}"/>
        </li>
        <li class="slide-2">
            <img src="{{asset("/shoes gallery/c2.jpg")}}"/>
        </li>
        <li class="slide-3">
            <img src="{{asset("/shoes gallery/c3.png")}}"/>
        </li>
    </ul>
    <div class="nav-arrow nav-next">
        <label class="nav-1" for="nav-1">></label>
        <label class="nav-2" for="nav-2">></label>
        <label class="nav-3" for="nav-3">></label>
    </div>
    <div class="nav-arrow nav-prev">
        <label class="nav-1" for="nav-1"><</label>
        <label class="nav-2" for="nav-2"><</label>
        <label class="nav-3" for="nav-3"><</label>
    </div>
    </div>

    <div class="content">
`   <br id="desc">
        <br></br>
        <div class="content0">
            <br>
    <h1>Welcome to Sneakers House!!! </h1><br><br>
        </div>
        <div class="content1">
            <br>
    <p>Here we give you the best shoes with the best price. You can find any kind of shoes here,from Regular Shoes to Premium and Limited Edition Shoes.</p> <br>
    </div>
    </div>

    <div class="footer1">
        Copyright Reserve (c)2017 , IT Team <br>
        Binus University
    </div>
</div>
</body>
<script type="text/javascript" src="script/jquery.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>
</html>