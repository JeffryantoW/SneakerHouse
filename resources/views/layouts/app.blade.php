<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        .content
        {


        }

        .judul
        {
            text-align: center;
        }

        .content0
        {

            text-align: center;
        }
        .content1
        {
            text-align: center;

        }

        a{
            text-decoration: none;
            background-color: transparent;
        }

        .btn:hover,
        .btn:focus{
            outline: none;
            box-shadow: none;
        }

        .background-image{
            position: absolute;
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(1.5px);
            z-index:-1;

        }

        .background-image1{
            position: absolute;
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(1px);
            z-index:-1;
            padding-left: 19%;

        }

        .comprof{
            border-radius: 20px;
            padding-right: 10%;
            padding-left: 11%;
        }

        #judul{
            font-size: 30px;
            font-family: eccentric std;
            letter-spacing: 10;
            padding-left: 5%;
            padding-top: 2%;
        }

        #description{
            font-size: 20px;
            padding-left: 10%;
            border: double;
            position: center;
        }

        #vimis{
            font-size: 25px;
            padding-left: 5%;
            border: solid 1px;
            border-style: groove;
            border-color: darkgrey;

        }

        .footer1{
            text-align: center;
            background: #5d5c59;
        }
        .regform{
            margin-top: 3%;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 5%;

        }

        #table form{
            padding-left: 8%;
            padding-top: 5%;
            padding-bottom: 5%;
            margin-right: 30%;
            margin-left: 20%;
            border: double;
        }

        #Title{
            font-size: 30px;
            font-family: eccentric std;
            letter-spacing: 10;
            padding-bottom: 3%;
            padding-left: 20%;
        }

        input[type=text]{
            width: 300px;
            height: 30px;
            border-radius: 10px;
        }

        textarea{
            width: 300px;
            height: 200px;
            border-radius: 10px;
        }

        select{
            width: 200px;
            height: 30px;
            border-radius: 10px;
        }

        input[type=button]{
            width: 200px;
            height: 50px;
            border-radius: 10px;
        }

        .footer1{
            text-align: center;
            background: #5d5c59;
        }
        .all-dem-shoes{

            border-style: none;
            border-radius: 20px;
            background: -moz-linear-gradient(#7B68EE  50%, #FFFFFF );
            padding-bottom: 10%;
            margin-left: 8%;
            margin-right: 8%;
        }

        #brand{
            font-size: 30px;
            font-family: eccentric std;
            letter-spacing: 10;
        }

        #brand img{
            width: 5%;
            height: 6%;
        }

        #shoes{
            text-align: center;
        }

        #shoes img{
            width: 10%;
            height: 20%;
            padding-left: 5%;
        }

        .footer1{
            text-align: center;
            background: #5d5c59;
        }
        .all-dem-sponsors{
            background: -moz-linear-gradient(#7B68EE  50%, #FFFFFF );
            border-radius: 20px;

        }

        #comp-logo {
            text-align: center;
            padding-top: 2%;
        }

        #comp-logo img{
            width: 20%;
            height: 10%;
        }

        #logosponsor{
            text-align: center;
        }

        #logosponsor img{
            width: 100px;
            height: 100px;
            margin: 20px 40px 20px 40px;
        }

        #logosponsor img:hover{
            transition: all 0.3s;
            -o-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transform: scale(1.5);
            -moz-transform: scale(1.5);
            -o-transform: scale(1.5);
            -webkit-transform: scale(1.5);
            box-shadow: 2px 2px 6px rgba(0,0,0,0.5);
        }

        .footer1{
            text-align: center;
            background: #5d5c59;
        }
        body{
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .logo{
            height: 10%;
            width: 50%;
            position: absolute;
        }

        .logo img{
            display: block;
            width: 30%;
            height: 50%;
            padding-left: 5%;
            position: absolute;
            margin-bottom: 50px;
        }

        .Navigation{
            padding-top: 5%;
            height: 3%;
            background: #5d5c59;
        }

        .nav.navbar-nav > li:hover > ul.sub-menu{
            display: block;
            -webkit-animation: fadeInUp 400ms;
            -moz-animation: fadeInUp 400ms;
            -ms-animation: fadeInUp 400ms;
            -o-animation: fadeInUp 400ms;
            animation: fadeInUp 400ms;
        }

        ul.sub-menu {
            position: absolute;
            top: 30px;
            left: 0;
            background: rgba(0, 0, 0, 0.6);
            list-style: none;
            padding: 0;
            margin: 0;
            width: 220px;
            -webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 999;
        }

        .dropdown ul.sub-menu li .active{
            color: #FDB45E;
            padding-left: 0;
        }


        .navbar-nav li ul.sub-menu li{
            padding: 10px 20px 0 ;
        }

        .navbar-nav li ul.sub-menu li:last-child{
            padding-bottom: 20px;
        }

        .navbar-nav li ul.sub-menu li a{
            color: #fff;
        }

        .navbar-nav li ul.sub-menu li a:hover{
            color: #FDB45E;
        }

        .right {
            right: 0;
        }

        .navbar-collapse.collapse{
            padding-left: 0;
        }

        .shop-menu ul li {
            display:inline-block;
            padding-left: 45px;
            padding-right: 0px;
        }

        .shop-menu ul li:last-child {
            padding-right: 0;
        }


        .shop-menu ul li a {
            background: white;
            color: #696763;
            font-family: 'Calibri';
            font-size: 17px;
            font-weight: 300;
            padding:0;
            padding-right: 0;
            margin-top: 10px;
        }


        .shop-menu ul li a i{
            margin-right:3px;
        }


        .shop-menu ul li a:hover {
            color:#fe980f;
            background:#fff;
        }

        .header_top {
            background: none repeat scroll 0 0 #F0F0E9;
        }

        .header-middle .container .row {
            border-bottom: 3px solid #f5f5f5;
            margin-left: 8%;
            margin-right: 8%;
            padding-bottom: 20px;
            padding-top: 35px;
        }

        .header-middle .container .row .col-sm-4{
            padding-left: 0;
        }

        .header-middle .container .row .col-sm-8 {
            padding-right: 1%;
            padding-left: 62%;
        }

        .Navigation li a{
            text-decoration: none;
            color: black;
        }

        .Navigation li:hover{
            background-color: white;
            text-decoration: none;
        }

        .member-section{
            text-align: center;
        }

        #dropdowncontent1{
            display: none;
        }

        #dropdowncontent1 img{
            display: block;
            width: 20%;
            height: 10%;
        }

        #dropdown1:hover #dropdowncontent1{
            display: block;
            position: absolute;
        }

        #dropdowncontent2{
            display: none;
        }

        #dropdowncontent2 a{
            display: block;
            padding-bottom: 10%;
        }

        #dropdowncontent2 a:hover{
            color: #fe980f;
        }

        #dropdown2:hover #dropdowncontent2{
            display: block;
            position: absolute;
            background: white;
            width: 10%;
        }

        #dropdowncontent3{
            display: none;
        }

        #dropdowncontent3 img{
            display: block;
            width: 20%;
            height: 10%;
        }

        #dropdown3:hover #dropdowncontent3{
            display: block;
            position: absolute;
        }

        #dropdowncontent4{
            display: none;
        }

        #dropdowncontent4 img{
            display: block;
            width: 40%;
            height: 10%;
        }

        #dropdown4:hover #dropdowncontent4{
            display: block;
            position: absolute;
        }

        #desc{
            border:none;
        }

        #related{
            padding-left: 1%;
            padding-right: 4%;
            padding-bottom: 30%;
            background: -moz-linear-gradient(#1780dd  50%, #FFFFFF );
            border-radius: 20px;
            height: 80px;
            text-align: center;
        }

        /* CSS Resets */
        * {
            padding:0;
            margin:0;
        }
        .slider {
            position: relative;
            overflow: hidden;
            margin-top: 70px;
        }
        .slider, ul.slide li img{
            position: relative;
            width:1000px;
            height: 450px;
            left:251px;
        }
        ul.slide {
            position: absolute;
            display: block;
            width:300%;
        }
        .caption {
            position: absolute;
            background-color: rgba(0,0,0,0.5);
            bottom:0;
            padding:10px;
            color:#fff;
            left: 0;
            right: 0;
        }/* Yang membuatnya jadi slider, alias kode intinya */

        ul.slide li {
            display: inline-block;
            float: left;
            transition: 2000ms;
        }
        ul.slide li.slide-1 {
            left: 5%;
        }
        ul.slide li.slide-2 {
            left: 100%;
        }
        ul.slide li.slide-3 {
            left: 215%;
        }
        #nav-1:checked ~ ul.slide li{
            transform: translateX(-25%);
        }
        #nav-2:checked ~ ul.slide li{
            transform: translateX(-125%);
        }
        #nav-3:checked ~ ul.slide li {
            transform: translateX(-225%);
        }

        /* End, yang membuatnya jadi slider *//* Navigator */
        .radio-nav { /* menghilangkan radio button */
            display: none;
        }/* styling untuk tombol next dan previous slide */

        .nav-arrow {
            position: absolute;
            top:45%;
            width:50px;
            height: 50px;
        }
        .nav-next {
            right:1px;
        }
        .nav-prev {
            left:12px;
        }
        .nav-arrow label {
            transition:all 0.3s;
            background-color: rgba(0,0,0,0.3);
            color: #fff;
            display: block;
            position: absolute;
            padding:10px 20px;
            cursor: pointer;
            z-index: 1;
            opacity: 0;
            font-weight: bold;
            line-height: 1;
        }
        .slider:hover .nav-arrow label{
            background-color: rgba(0,0,0,0.7);
        }

        #nav-1:checked ~ .nav-prev label.nav-3,
        #nav-1:checked ~ .nav-next label.nav-2,
        #nav-2:checked ~ .nav-prev label.nav-1,
        #nav-2:checked ~ .nav-next label.nav-3,
        #nav-3:checked ~ .nav-prev label.nav-2,
        #nav-3:checked ~ .nav-next label.nav-1 {
            z-index: 2;
            opacity: 1;
        }

        .header-middle .container .row .col-sm-4{
            padding-left: 0;
        }

        h2.title {
            color: #FE980F;
            font-family: Calibri;
            font-size: 22px;
            font-weight: 700;
            margin: 0 15px;
            text-transform: uppercase;
            margin-bottom: 30px;
            position: relative;
            padding-left: 47.5%;
        }

        .product-image-wrapper{
            border:1px solid #F7F7F5;
            overflow: hidden;
            margin-bottom:30px;
        }

        .single-products {
            position: relative;
        }

        .single-products:hover .product-overlay {
            display:block;
            height:10%;
            left: 40%;
            width: 301px;
        }

        .productinfo h2{
            color: #FE980F;
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-weight: 700;
            padding-left: 45%;
        }

        .productinfo p{
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #696763;
            padding-left: 47%;
        }

        .productinfo1 h2{
            color: #FE980F;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            font-weight: 600;
            padding-left: 40%;
        }

        .productinfo1 p{
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #696763;
            padding-left: 47%;
        }

        .productinfo img{
            padding-left: 40%;
            width: 20%;
        }

        .productinfo{
            position:relative;

        }

        .product-overlay h2{
            color: #fff;
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-weight: 700;
            padding-left: 40%;
            text-align: center;
        }

        .product-overlay .overlay-content {
            bottom: 0;
            position: absolute;
            bottom: 0;
            width: 25%;
            padding-left: 40%;
        }

        .product-overlay {
            background:#FE980F;
            top: 0;
            display: none;
            height: 0;
            position: absolute;
            transition: height 500ms ease 0s;
            width: 100px;
            text-align: center;

        }

        .single-products:hover .product-overlay {
            display:block;
            height:100%;
        }

        #related ul li{
            list-style: none;
            font-family: eccentric std;
        }

        #related li a{
            color: black;
        }

        #judul1
        {
            font-size: 26px;
            font-family: eccentric std;
            letter-spacing: 10;
            text-align: center;
        }

        .pemesanan
        {
            padding-left: 25%;
        }

        .footer{
            text-align: center;
            margin-top: 8%;
            background: #F0F0E9;
        }

        .footer1{
            text-align: center;
            margin-top: 18.5%;
            background: #F0F0E9;
        }

        .footer2{
            text-align: center;
            margin-top: 29.5%;
            background: #F0F0E9;
        }

        .footer3{
            text-align: center;
            margin-top: 7.5%;
            background: #F0F0E9;
        }

        .footer4 {
            text-align: center;
            margin-top: 25%;
            background: #F0F0E9;
        }

        .footer5{
            text-align: center;
            margin-top: 31%;
            background: #F0F0E9;
        }

    </style>


</head>
<body>

</body>
</html>