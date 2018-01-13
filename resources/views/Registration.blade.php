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

    <div class="regform">
        <div id="Title">Become A Member !!!</div>
        <div id="table-wrapper">
            <div id="table">
                <div class="background-image1">
                    <img src="a1.jpg" width="712px" height="770px">
                </div>
                <form action="/register" method="post">
                    {{csrf_field()}}
                    Name :<br>
                    <input type="text" name="username" id="uname">
                    <br><br>
                    Address :<br>
                    <textarea name="address" id="addrs"></textarea>
                    <br><br>
                    Phone Number :<br>
                    <input type="text" name="phone" id="uphone">
                    <br><br>
                    E-Mail :<br>
                    <input type="text" name="email" id="uemail"><br><br>
                    Password: <br>
                    <input type="password" name="password">
                    <br><br>
                    <input type="checkbox" name="check" id="ucheck">I agree to the <a href="#">Terms</a> and <a href="#">Condition</a>
                    <br>
                    <input type="checkbox" name="subs" id="usubs">Subscribe to weekly news latter
                    <br>
                    <label id="error">
                        @if($errors->any)
                            {{ $errors->first() }}
                            @endif
                    </label>
                    <br><br>
                    <input type="submit" name="registration" value="Register">
                </form>
            </div>
        </div>
    </div>

    <div class="footer3">
        Copyright Reserve (c)2017 , IT Team <br>
        Binus University
    </div>
</div>
</body>
<script type="text/javascript" src="script/regis.js"></script>
</html>