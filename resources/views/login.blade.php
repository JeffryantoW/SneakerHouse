<html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <div class="background-image">
        <img src="b.jpg" width="100%" height="1000px">
    </div>
</head>
@extends('layouts.app')
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

<br>
<br>
<br>
<br>
<div id="judul1"><b>Sneakers House</b><br>
<div class="regform">
    <div id="table">
        <div class="background-image1">
            <img src="a2.jpg" width="760px" height="260px">
        </div>
    <form action="/login" method="post">
                {{ csrf_field() }}
                Email :
                <input type="email" name="email"><br>
                <br>
                Password :
                <input type="password" name="password"><br>
                <br>
                <input type="submit">
            </form>
        </div>
</div>
</div>

<div class="footer4">
    Copyright Reserve (c)2017 , IT Team <br>
    Binus University
</div>
</body>
</html>