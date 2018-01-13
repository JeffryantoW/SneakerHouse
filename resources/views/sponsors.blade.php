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
        <img src="b.jpg" width="100%" height="95%">
    </div>
</head>
<body>
<div class="Wrapper">
    <div class="logo">
        <img src="/logo.png">
    </div>
    <div class="Navigation">
        <ul>
            <li id="dropdown1"><a href="{{url('/home')}}">H o m e</a>
                <div id="dropdowncontent1">
                    <img src="/shoes gallery/s12.png">
                </div>
            </li>
            <li id="dropdown2"><a href="#">S h o e s&nbsp;&nbsp;G a l l e r y</a>
                <div id="dropdowncontent2">
                    <a href="{{url('/sneakersgalery')}}">Nike</a>
                    <a href="{{url('/bootsgalery')}}">Adidas</a>
                </div>
            </li>
            <li id="dropdown3"><a href="{{url('/sponsorss')}}">S p o n s o r s</a>
                <div id="dropdowncontent3">
                    <img src="/shoes gallery/s9.png">
                </div>
            </li>
            <li id="dropdown4"><a href="{{url('/about')}}">A b o u t&nbsp;&nbsp;U s</a>
                <div id="dropdowncontent4">
                    <img src="/shoes gallery/s8.png">
                </div>
            </li>
        </ul>
    </div>

    <br><br>
    <div class="member-section">
        <!--Not a member?
        <a href="Registration.html">create account</a>
        to access Market !<br>
        already member?
        <a href="#">Login!</a>-->
    </div>

    <div class="all-dem-sponsors">
        <div id="comp-logo"><img src="/logo.png"></div>

        <div id="logosponsor">
            <a href="tokopedia.com"><img src="/sponsors/1.png"></a>
            <a href="bukalapak.com"><img src="/sponsors/2.png"></a>
            <a href="kaskus.co.id"><img src="/sponsors/3.jpg"></a>
            <a href="shoope.co.id"><img src="/sponsors/4.png"></a>
            <a href="lazada.com"><img src="/sponsors/5.jpg"></a>
            <a href="amazon.com"><img src="/sponsors/6.jpg"></a>
            <a href="ebay.com"><img src="/sponsors/7.png"></a>
        </div>
    </div>

    <div class="footer">
        Copyright Reserve (c)2017 , IT Team <br>
        Binus University
    </div>
</div>
</body>
</html>