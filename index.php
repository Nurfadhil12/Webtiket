<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="assets/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/OwlCarousel/owl.theme.default.min.css">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        * {
            font-family: 'Poppins', sans-serif;
            outline: none;
        }

        html {
            overflow-x: hidden;
        }

        body {
            margin: 0;
            background: #f7f7f7;
            overflow-x: hidden;
        }

        ul {
            margin: 0;
            /* padding: 0px 140px;
            display: flex; */
        }

        li {
            list-style: none;
            /* margin: 0px 32px; */
        }
        a{
            text-decoration: none;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }

        header {
            background: #fff;
        }

        header .baris {
            align-items: center
        }

        header .baris.header-top {
            padding: 20px 0;
        }
        .navbar .lr{
            text-align: center;
            color: #16056B;
            float: right;
            display: flex;
        }
        .navbar .atas{
            margin: 0px 25px;
            font-size: 18px;
        }
        .search{
            border: 1px solid #16056B;
            /* width: 500px; */
            overflow-x: hidden;
            display: flex;
            border-radius: 50px;
            font-size: 18px;
            position: relative;
        }
        .search input{
        width: 300px;
        height:65px;
        border: none;
        padding: 8px 20px;
        outline: none;
        font-size: 18px;
       
        }
        .button-src{
        display: inline-block;
        }
        .button-src button{
        padding: 10px 35px 10px 35px;
        border-radius: 50px;
        border: none;
        margin: 9px 7px;
        background-color: #FD9519;
        color: #ffffff;
        font-size: 18px;
        cursor: pointer;
        }
    
        .wadah {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            }

        a {
            text-decoration: none;
        }
        .logo img{
            max-width: 80px;
        }
        p {
            display: inline-block;
            margin: 0;
        }
        .gambar1{
            width: 725px;
            height: 480.21px;
            background: url(pexels-thibault-trillet-167491.jpg);
        }
        .gambar2{
            position: absolute;
            width: 400px;
            height: 266.67px;
            left: 434px;
            top: 252px;
            background: url(pexels-wendy-wei-1190297.jpg);
            border: 10px solid #FFFFFF;
        }
        .section{
            padding-top: 80px;
            padding-bottom: 80px;
        }
        .card{
            position: relative;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 8px;
            background: #fff;
            -webkit-box-shadow: 0 2px 6px 0 rgba(28,29,29,.25);
            box-shadow: 0 2px 6px 0 rgba(28,29,29,.25);
            overflow: hidden;
            margin: 15px;
            
        }
        .btn-kanan{
            background: #FD9519;
            border-radius: 16px 0px;
            border: none;
            color: #ffffff;
            width: 115px;
            height: 55px;
            position: absolute;
            margin: -35px 210px;
            cursor: pointer;
        }
        .label{
            background: rgba(180, 215, 254, 0.5);
            border-radius: 40px;
            width: 190px;
            padding: 5px 12px;
            letter-spacing: 0.3em;
            color: #5696F4;
        }
        .label2{
            background: rgba(180, 215, 254, 0.5);
            border-radius: 40px;
            width: 190px;
            padding: 5px 12px;
            letter-spacing: 0.3em;
            color: #5696F4;
        }
        .jdl{
            font-weight: 600;
            font-size: 64px;
            color: #16056B;
        }
        .content-judul{
            font-weight: 600;
            font-size: 48px;
            color: #16056B;
        }
        .btn2{
            float: right;
            display: block;
            width: 125px;
            height: 50px;
            background: #FD9519;
            border-radius: 100px;
            border: none;
            color: #ffffff;
        }
        .cr{
            margin-left: -280px;
        }
        .cr2{
            margin-left: -560px;
        }
        .mdm{
            font-size: 14px;
            line-height: 30px;
            color: #16056B;
        }
        .kcl1{
            font-size: 16px;
            line-height: 24px;
            color: rgba(99, 99, 99, 0.75);
            margin-top: 15px;
        }
        .mdm1{
            font-weight: 500;
            font-size: 20px;
            line-height: 27px;
            color: #16056B;
        }
        .jrk{
            margin: 20px 80px;
        }
        .tmr{
            text-align: center;
            width: 350px;
            font-size: 24px;
            border-radius: 10px;
            background-color:#FD9519;
            color: #fff;
            display: block;
            margin: auto;
            margin-bottom: 30px;
        }
        .tb{
            display: flex;
            color: #16056B;
            font-size: 18px;
            font-weight: bold;
        }
        .krg{
            display: flex;
        }
        .krg1{
            display: flex;
        }
        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            padding: 8px 16px;
            margin: -22px -49px;
            color: white;
            font-weight: bold;
            transition: 0.6s ease;
            border-radius: 50px;
            user-select: none;
            background: #FD9519;
            height: 40px;
            width: 40px;
        }
        .door{
            width: 150px;
            height: 46px;
            background-color: #59C864;
            text-align: center;
            padding: 11px;
            color: #fff;
            border-radius: 15px;
            margin: 20px;
        }
        .pes{
            width: 150px;
            height: 46px;
            background-color: #CC5858;
            text-align: center;
            padding: 11px;
            color: #fff;
            border-radius: 15px;
            margin: 20px;
        }
        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 50px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover, button:hover {
            background-color:#16056B;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        .footer-content{
            display: flex;
            
        }
        .footer-content ul{
            margin:0px 25px;
        }
        .head{
            font-weight: bold;
            font-size: 18px;
            color: #16056B;
            margin-bottom: 10px;
        }
        .footeri{
            display: flex;
            font-size: 16px;
            margin: auto;
            color: #636363;
        }


        @media screen and (max-width: 991px) {
            .navbar{     
                margin-left: -60px;
            }
            
            .button-src{
                margin: 0px 0px 0px 90px;
            }
            .gambar1 img{
                max-width: 450px;
            }
            .gambar1{
                margin-bottom: -150px;
            }
            .gambar2 img{
                max-width: 315px;
            }
            .gambar2{
                left: 250px;
            }
            .search{
                margin-bottom: 50px;
                width: 500px;
            }
            .label {
                text-align: center;
                display: block;
                margin: auto;
            }
            .content-judul{
                text-align: center;
            }
            .card{
                margin: auto;
                display: block;
                margin-bottom: 30px;
            }
            .krg{
                display: block;
            }
            .label2{
                margin: 20px 175px;
            }
            .prev, .next{
                margin: 10px;
            }
            
            

        }
        @media screen and (max-width: 767px){
            .konten-header{
                text-align: center;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -60px;
            }
            .navbar .atas {
                font-size: 14px;
                margin: 0px 10px;
            }
            .logo img{
                max-width: 70px;
            }
            .btn{
                margin-top: -70px;
            }
            .button-src{
                margin: 0px 0px 0px 90px;
            }
            .gambar1 img{
                max-width: 450px;
            }
            .gambar2 img{
                max-width: 315px;
            }
            .gambar2{
                left: 250px;
            }
            .search{
                margin-bottom: 50px;
            }
            .label {
                text-align: center;
                display: block;
                margin: auto;
            }
            .content-judul{
                text-align: center;
            }
            .card{
                margin: auto;
                display: block;
                margin-bottom: 30px;
            }
            .jrk {
                margin: 20px 17px;
            }
            .krg{
                display: block;
                margin: auto;
                margin-left: 75px;
            }
            .krg1{
                display: block;  
                margin: auto;
                 margin-left: 75px;
            }
            .label2{
                margin: 20px 175px;
            }
            .prev, .next{
                margin: -60px;
            }
            .footer-content{
                display: block;
            }
            .door{
                width: 135px;
            }
            .pes{
                width: 135px;
            }
        }
        @media screen and (max-width: 575px){
            .konten-header{
                text-align: center;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -50px;
            }
            .btn{
                margin-top: -70px;
            }
            .button-src{
                margin: 0px 0px 0px -90px;
            }
            .gambar1 img{
                max-width: 450px;
            }
            .gambar2 img{
                max-width: 315px;
            }
            .gambar2{
                left: 250px;
            }
            .search{
                width: 280px;
                margin: auto;
                margin-bottom: 20px;
            }
            .search input {
                width: 300px;
                height: 50px;
                border: none;
                padding: 0px 20px;
                outline: none;
                font-size: 12px;
            }
            .button-src button {
                padding: 5px 15px 5px 15px;
                border-radius: 50px;
                border: none;
                margin: 11px 7px;
                background-color: #FD9519;
                color: #ffffff;
                font-size: 12px;
            }
            .label {
                text-align: center;
                display: block;
                margin: auto;
            }
            .content-judul{
                text-align: center;
            }
            .jrk{
                margin: 15px 5px;
            }
            .card{
                margin: auto;
                display: block;
                margin-bottom: 10px;
            }
            .krg {
                display: block;
                margin: auto;
            }
            .krg1 {
                display: block;
                margin-left: 40px;
                
            }
            .tb{
                font-size: 10px;
            }
            .label2{
                margin: 20px 175px;
            }
            .prev, .next{
                margin: 10px;
            }
            .footer-content ul {
                margin: 0px 20px;
            }
            .footer-content{
                display: block;
                margin: auto;
            }
            .head{
                font-size: 12px;
            }
            .footeri{
                font-size: 10px;
            }
        }
        @media screen and (max-width: 400px){
            .logo img {
                    max-width: 50px;
            }
            .btn2{
                width: 70px;
                height: 40px;
                margin-top: 22px;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -60px;
            }
            .jdl{
                font-size: 50px;
            }
            .content-judul{
                font-size: 34px;
            }
            .navbar .atas{
                font-size: 10px;
                margin: 20px 10px;
            }
            .search{
                width: 300px;
                margin: 35px;
            }
            .button-src {
                margin: 0px 0px 0px -80px;
            }
            .gambar1 img {
                max-width: 325px;
            }
            .gambar2 {
                left: 175px;
                top: 120px;
            }
            .gambar2 img {
                max-width: 225px;
            }
            .bk img{
                width: 220px;
            }
            .jrk{
                margin: 15px 0px;
            }
            .card{
                width: 250px;
            }
            .btn-kanan{
                margin: -24px 135px;
                width: 95px;
                height: 40px;
            }
            .kcl {
                font-size: 12px;
            }
            .kcl1{
                font-size: 12px;
            }
            .mdm{
                font-size: 14px;
            }
            .mdm1{
                font-size: 14px;
            }
            .tb{
                font-size: 10px;
            }
            .krg {
                display: block;
                margin: auto;
            }
            .krg1 {
                display: block;
                margin-left: 40px;
                
            }
            .prev, .next {
                margin: 5px;
            }
            .footer-content{
                margin: 0px 50px;
            }
            footer{
                    margin: 20px -90px;
            }
            .footeri{
                font-size: 10px;
            }
            .tmr{
                width: 250px;
                font-size: 20px;
            }
        }


        @media (min-width: 576px) {
            .wadah {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .wadah {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .wadah {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .wadah {
                max-width: 1140px;
            }
        }

        .baris {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .grid-1,
        .grid-2,
        .grid-3,
        .grid-4,
        .grid-5,
        .grid-6,
        .grid-7,
        .grid-8,
        .grid-9,
        .grid-10,
        .grid-11,
        .grid-12,
        .grid {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .grid {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .invisible-grid {
            visibility: hidden;
        }

        .no-margin {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .showup {
            display: block;
        }
        @media (min-width: 768px) {
            .grid {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .grid-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: no-marginnone;
            }

            .grid-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .grid-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .grid-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .grid-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .grid-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .grid-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .grid-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .grid-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .grid-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .grid-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .grid-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .grid-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="wadah-semua"  style="background-color: #ffffff;">
        <header>
            <div class="wadah">
                <div class="baris header-top">
                    <div class="grid-3">
                        <a href="index.php">
                            <div class="logo">
                                <img src="assets/img/logo.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="grid-9">
                        <div class="navbar">
                            <nav>
                                <ul class="lr">
                                    <a href="index.php">
                                        <li class="atas" style="font-weight: bold;">
                                            Beranda
                                        </li>
                                    </a>
                                    <a href="Seminar.php">
                                        <li class="atas">
                                            Seminar
                                        </li>
                                    </a>
                                    <a href="Webinar.php">
                                        <li class="atas">
                                            Webinar
                                        </li>
                                    </a>
                                    <a href="Donasi.php">
                                        <li class="atas">
                                            Donasi
                                        </li>
                                    </a>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="baris">
                    <div class="grid-5">
                        <div class="konten-header">
                            <div style="margin: 20px 0px;">
                                <div class="jdl">
                                    Temukan Eventmu Disini!
                                </div>
                            </div>
                            <div style="margin: 20px 0px;">
                                <p style="font-size: 20px;line-height: 36px;margin: 20px 0px;color: #16056B;opacity: 0.5;">
                                    Jangan khawatir, kami adalah solusi untuk mendapatkan Event impianmu
                                </p>
                            </div>      
                            <div class="search">
                                <a name="search"></a>
                                <input type="text"placeholder="Cari event...">
                                <div class="button-src">
                                    <button>Mulai</button>
                                </div>
                            </div>                  
                        </div>
                    </div>
                    <div class="grid-7">
                        <div>
                            <div class="gambar1">
                               <img src="assets/img/gambarbesar.png" alt="">
                            </div>
                            <div class="gambar2">
                            <img src="assets/img/gambarkecil.png" alt="">
                            </div>
                        </div>
                   </div>
                </div>
              </div>
        </header>
        <div class="section">
        </div>
        <div class="container1" style="background: #D9EBFF;">
            <div class="section">
            </div>
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <div>
                            <div class="label">
                                <a name="rekomendasi">
                                REKOMENDASI
                                </a>
                            </div>
                            <div class="content-judul">
                                Event Pilihan Untukmu
                            </div>
                        </div>
                    </div>
                    <div class="krg">
                        <div>
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div class="bk">
                                        <img src="assets/img/Eventt2.1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div class="mdm" style="font-weight: bold;">
                                                CARA MENJALANI BISNIS UNTUK PEMULA
                                            </div>
                                            <div class="kcl" style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Syakir Daulay S.
                                            </div>
                                        </div>
                                        <div class="kcl">
                                            <div style="display: flex;color: #636363;opacity: 0.75; line-height: 30px;">
                                                <div>
                                                    <img src="assets/img/users.png" alt="">
                                                </div>
                                                <div style="margin: 0px 20px;">
                                                    Ur Plan
                                                </div>
                                            </div>
                                            <div style="display: flex;color: #636363;opacity: 0.75; line-height: 30px;">
                                                <div>
                                                    <img src="assets/img/calendar.png" alt="">
                                                </div>
                                                <div style="margin: 0px 20px;">
                                                    4 Oktober 2020
                                                </div>
                                            </div>
                                            <div style="color: #636363;opacity: 0.75;">
                                                <div style="display: flex;">
                                                    <div>
                                                        <img src="assets/img/map.png" alt="">
                                                    </div>
                                                    <div style="margin: 0px 20px;">
                                                        Webinar Zoom
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="TiketSyakirDaulay.php">
                                                <button class="btn-kanan">
                                                Booking
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tmr">
                                tersisa:
                                <p id="demo1"></p>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div class="bk">
                                        <img src="assets/img/Eventt2.2.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div class="mdm" style="font-weight: bold;">
                                                CARA MENJADI ENTREPRENEUR MUDA
                                            </div>
                                            <div class="kcl" style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Oki Setiana D.
                                            </div>
                                        </div>
                                        <div class="kcl">
                                            <div style="display: flex;color: #636363;opacity: 0.75; line-height: 30px;">
                                                <div>
                                                    <img src="assets/img/users.png" alt="">
                                                </div>
                                                <div style="margin: 0px 20px;">
                                                    Ur Plan
                                                </div>
                                            </div>
                                            <div style="display: flex;color: #636363;opacity: 0.75; line-height: 30px;">
                                                <div>
                                                    <img src="assets/img/calendar.png" alt="">
                                                </div>
                                                <div style="margin: 0px 20px;">
                                                    9 Oktober 2020
                                                </div>
                                            </div>
                                            <div style="color: #636363;opacity: 0.75;">
                                                <div style="display: flex;">
                                                    <div>
                                                        <img src="assets/img/map.png" alt="">
                                                    </div>
                                                    <div style="margin: 0px 20px;">
                                                        Webinar Zoom
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="TiketOkiS.php">
                                                <button class="btn-kanan">
                                                Booking
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tmr">
                                tersisa:
                                <p id="demo2"></p>
                            </div>

                        </div>
                        
                        <div>
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div class="bk">
                                        <img src="assets/img/Eventt2.3.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div class="mdm" style="font-weight: bold;">
                                                CARA SUKSES MENJADI COUPLEPRENEUR
                                            </div>
                                            <div class="kcl" style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Adinda Amira.
                                            </div>
                                        </div>
                                        <div class="kcl">
                                            <div style="display: flex;color: #636363;opacity: 0.75; line-height: 30px;">
                                                <div>
                                                    <img src="assets/img/users.png" alt="">
                                                </div>
                                                <div style="margin: 0px 20px;">
                                                    Ur Plan
                                                </div>
                                            </div>
                                            <div style="display: flex;color: #636363;opacity: 0.75; line-height: 30px;">
                                                <div>
                                                    <img src="assets/img/calendar.png" alt="">
                                                </div>
                                                <div style="margin: 0px 20px;">
                                                    18 Oktober 2020
                                                </div>
                                            </div>
                                            <div style="color: #636363;opacity: 0.75;">
                                                <div style="display: flex;">
                                                    <div>
                                                        <img src="assets/img/map.png" alt="">
                                                    </div>
                                                    <div style="margin: 0px 20px;">
                                                        Webinar Zoom
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="TiketAdindaM.php">
                                                <button class="btn-kanan">
                                                Booking
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tmr">
                                tersisa:
                                <p id="demo3"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                </div>
            </div>
        </div>
        <div class="section">
        </div>
        <div class="container2">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        
                        <div class="label" style="text-align: center;
                        margin: auto;">
                        <a name="kategori">
                            KATEGORI
                        </a>
                        </div>
                    </div>
                    <div class="grid-12">
                        <div class="content-judul" style="text-align: center;">
                            Event Sesuai Kategori
                        </div>
                    </div>
                    <div class="grid-12">
                        <div class="w3-bar">
                           <div class="grid-12" style="border-bottom: 1px solid;">
                                <div class="tb">
                                    <div class="jrk">
                                        <button class="w3-bar-item w3-button" onclick="openCity('Publicspeaking')">Public Speaking</button>
                                    </div>
                                    <div class="jrk">
                                        <button class="w3-bar-item w3-button" onclick="openCity('Leadership')">Leadership</button>
                                    </div>
                                    <div class="jrk">
                                        <button class="w3-bar-item w3-button" onclick="openCity('Business')">Business</button>
                                    </div>
                                    <div class="jrk">
                                        <button class="w3-bar-item w3-button" onclick="openCity('Investment')">Investment</button>
                                    </div>
                                </div>
                           </div>
                          </div>
                          
                          <div id="Publicspeaking" class="w3-container city">
                            <div>
                                <div class="grid-12">
                                    <div class="krg">
                                        <div style="margin: 20px 30px;">
                                            <!-- <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div> -->
                                            <div>
                                                <div class="mdm" style="color: #000000; font-size: 18px; font-weight: bold;">
                                                    Waahh Kosonggg...
                                                </div>
                                                <div class="kcl" style="color: #000000;">
                                                    Maaf yah, belum ada event untuk saat ini. Tapi tenang, kami sedang mempersiapkan event yang menarik untuk kamu <br>
                                                    pastinya
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div style="margin: 20px 30px;">
                                            <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div>
                                            <div>
                                                <div class="mdm" style="color: #16056B; font-size: 18px;">
                                                    Festivaland Purwokerto
                                                </div>
                                                <div class="kcl" style="color: rgba(99, 99, 99, 0.75);">
                                                    Event online
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 20px 30px;">
                                            <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div>
                                            <div>
                                                <div class="mdm" style="color: #16056B; font-size: 18px;">
                                                    Festivaland Purwokerto
                                                </div>
                                                <div class="kcl" style="color: rgba(99, 99, 99, 0.75);">
                                                    Event online
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                              </div>
                          </div>
                          <div id="Leadership" class="w3-container city" style="display:none">
                            <div>
                                <div class="grid-12">
                                    <div class="krg">
                                        <div style="margin: 20px 30px;">
                                            <!-- <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div> -->
                                            <div>
                                                <div class="mdm" style="color: #000000; font-size: 18px; font-weight: bold;">
                                                    Waahh Kosonggg...
                                                </div>
                                                <div class="kcl" style="color: #000000;">
                                                    Maaf yah, belum ada event untuk saat ini. Tapi tenang, kami sedang mempersiapkan event yang menarik untuk kamu <br>
                                                    pastinya
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div style="margin: 20px 30px;">
                                            <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div>
                                            <div>
                                                <div class="mdm" style="color: #16056B; font-size: 18px;">
                                                    Festivaland Purwokerto
                                                </div>
                                                <div class="kcl" style="color: rgba(99, 99, 99, 0.75);">
                                                    Event online
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 20px 30px;">
                                            <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div>
                                            <div>
                                                <div class="mdm" style="color: #16056B; font-size: 18px;">
                                                    Festivaland Purwokerto
                                                </div>
                                                <div class="kcl" style="color: rgba(99, 99, 99, 0.75);">
                                                    Event online
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div> 
                          </div>
                          
                          <div id="Business" class="w3-container city" style="display:none">
                            <div>
                                <div class="grid-12">
                                    <div class="krg">
                                        <div style="margin: 20px 30px;">
                                            <!-- <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div> -->
                                            <div>
                                                <div class="mdm" style="color: #000000; font-size: 18px; font-weight: bold;">
                                                    Waahh Kosonggg...
                                                </div>
                                                <div class="kcl" style="color: #000000;">
                                                    Maaf yah, belum ada event untuk saat ini. Tapi tenang, kami sedang mempersiapkan event yang menarik untuk kamu <br>
                                                    pastinya
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div style="margin: 20px 30px;">
                                            <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div>
                                            <div>
                                                <div class="mdm" style="color: #16056B; font-size: 18px;">
                                                    Festivaland Purwokerto
                                                </div>
                                                <div class="kcl" style="color: rgba(99, 99, 99, 0.75);">
                                                    Event online
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 20px 30px;">
                                            <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div>
                                            <div>
                                                <div class="mdm" style="color: #16056B; font-size: 18px;">
                                                    Festivaland Purwokerto
                                                </div>
                                                <div class="kcl" style="color: rgba(99, 99, 99, 0.75);">
                                                    Event online
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div> 
                          </div>

                          <div id="Investment" class="w3-container city" style="display:none">
                            <div>
                                <div class="grid-12">
                                    <div class="krg">
                                        <div style="margin: 20px 30px;">
                                            <!-- <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div> -->
                                            <div>
                                                <div class="mdm" style="color: #000000; font-size: 18px; font-weight: bold;">
                                                    Waahh Kosonggg...
                                                </div>
                                                <div class="kcl" style="color: #000000;">
                                                    Maaf yah, belum ada event untuk saat ini. Tapi tenang, kami sedang mempersiapkan event yang menarik untuk kamu <br>
                                                    pastinya
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div style="margin: 20px 30px;">
                                            <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div>
                                            <div>
                                                <div class="mdm" style="color: #16056B; font-size: 18px;">
                                                    Festivaland Purwokerto
                                                </div>
                                                <div class="kcl" style="color: rgba(99, 99, 99, 0.75);">
                                                    Event online
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin: 20px 30px;">
                                            <div class="bk">
                                                <img src="assets/img/gambar3.png" alt="">
                                            </div>
                                            <div>
                                                <div class="mdm" style="color: #16056B; font-size: 18px;">
                                                    Festivaland Purwokerto
                                                </div>
                                                <div class="kcl" style="color: rgba(99, 99, 99, 0.75);">
                                                    Event online
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
        </div>
        <!-- <div class="container3">
            <div class="wadah" style="background: url(assets/img/bg2.png);background-repeat: no-repeat;">
                <div class="baris">
                    <div style="padding: 80px 0px;">
                        <div class="grid-12">
                            <div style="margin: 0px 15px;">
                                <div class="label2">
                                    LOKASI EVENT
                                </div>
                            </div>
                        </div>
                        <div class="grid-12">
                            <div class="krg">
                                <div>
                                    <div class="content-judul">
                                        Temukan event di kota lainnya
                                    </div>
                                </div>
                                <div>
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div>
                                                <img src="assets/img/gambar4.png" alt="">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Jakarta
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div>
                                                <img src="assets/img/gambar4.png" alt="">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Jakarta
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div>
                                                <img src="assets/img/gambar4.png" alt="">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Jakarta
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-12">
                            <div style="display: flex;margin: 30px 0px;">
                                <div class="grid-3">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div>
                                                <img src="assets/img/gambar4.png" alt="">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Jakarta
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-3">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div>
                                                <img src="assets/img/gambar4.png" alt="">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Jakarta
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-3">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div>
                                                <img src="assets/img/gambar4.png" alt="">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Jakarta
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-3">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div>
                                                <img src="assets/img/gambar4.png" alt="">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Jakarta
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-12">
                            <div style="margin: 80px 490px;">
                                <button style="background: #FD9519;
                                border-radius: 100px;
                                border: none;
                                color: #ffffff;
                                width: 130px;
                                height: 40px;">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container4">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <div class="label" style="text-align: center;
                            margin: auto;">
                            <a name="blog">
                                BLOG
                            </a>
                        </div>
                    </div>
                    <div class="grid-12">
                        <div class="content-judul" style="text-align: center;">
                            Baca juga blog kami
                        </div>
                    </div>
                    <div class="grid-12">
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <div class="krg1">
                                    <div style="margin: 0px 30px;">
                                        <div class="bk">
                                            <img src="assets/img/Blog2.0.png" alt="">
                                        </div>
                                        <div>
                                            <a href="BlogTentangProgramImpact.php">
                                            <div class="mdm1">
                                                Tentang Program Impact
                                            </div>
                                            <div class="kcl1">
                                                Selain menyelenggarakan program POINS (Power of Inspire), MIRAS (Muhasabah Diri
                                                Ramadhan Asyik), Sedekah On The Road dan SSOBI (Safari Sharing Online Business
                                                International),
                                            </div>
                                            </a>
                                        </div>
                                    </div>  
                                    <div style="margin: 0px 30px;">
                                        <div class="bk">
                                            <img src="assets/img/Blog4.0.png" alt="">
                                        </div>
                                        <div>
                                            <a href="BlogKunciSuksesSedekah.php">
                                            <div class="mdm1">
                                                Kunci Sukses Sedekah 
                                            </div>
                                            <div class="kcl1">
                                                Percayakah kamu, kalau sedekah ternyata bisa menjadi kunci kesuksesan?
                                                Ya, saya percaya sekali kalau sedekah bisa menjadi kunci sukses kita. 
                                            </div>
                                            </a>
                                        </div>
                                    </div>  
                                    <div style="margin: 0px 30px;">
                                        <div class="bk">
                                            <img src="assets/img/Blog5.0.png" alt="">
                                        </div>
                                        <div>
                                            <a href="BlogPentingnyaMengetahuiDiriSendiri.php">
                                            <div class="mdm1">
                                                Pentingnya Mengetahui Diri Sendiri
                                            </div>
                                            <div class="kcl1">
                                                Banyak sekali orang yang tidak mengenal dirinya sendiri. Merasa paham tentang banyak
                                                hal, tetapi tidak paham dengan diri sendiri.                                             
                                            </div>
                                            </a>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                            <div class="mySlides fade">
                                <div class="krg1">
                                    <div style="margin: 0px 30px;">
                                        <div class="bk">
                                            <img src="assets/img/Blog1.0.png" alt="">
                                        </div>
                                        <div>
                                            <a href="BlogKegiatanUrplan.php">
                                                <div class="mdm1">
                                                    Kegiatan Ur Plan
                                                </div>
                                                <div class="kcl1">
                                                    Halooo, teman-teman! Disini saya mau ngasih tau nih, kegiatan atau event apa saja sih
                                                    yang diselenggarakan oleh URPLAN GROUP?? Tentunya semua kegiatan
                                                </div>
                                            </a>
                                        </div>
                                    </div>  
                                    <div style="margin: 0px 30px;">
                                        <div class="bk">
                                            <img src="assets/img/Blog3.0.png" alt="">
                                        </div>
                                        <div>
                                            <a href="BlogTatacaraTransferKeBank.php">
                                                <div class="mdm1">
                                                    Tatacara Transfer Ke bank
                                                </div>
                                                <div class="kcl1">
                                                    Public speaking, adalah kemampuan untuk berkomunikasi secara langsung kepada banyak orang.
                                                    Komunikasi yang dimaksud adalah upaya penyampaian informasi secara efisien,
                                                </div>
                                            </a>
                                        </div>
                                    </div>  
                                    <div style="margin: 0px 30px;">
                                        <div class="bk">
                                            <img src="assets/img/Blog6.0.png" alt="">
                                        </div>
                                        <div>
                                            <a href="BlogTipsPublicSpeakingBagiPemula.php">
                                                <div class="mdm1">
                                                    Tips Public Speaking Bagi Pemula
                                                </div>
                                                <div class="kcl1">
                                                    Halloooo guys, apa kabarrr?? Semoga kalian sehat dan sukses selalu yaaa :-)
                                                    Disini saya ingin menjelaskan sesuatu nih..
                                                </div>
                                            </a>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                            <div>
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section"></div>
        <div class="container5" style="background: #D9EBFF;">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <footer>
                            <div class="footer-wadah">
                                <div class="grid-12">
                                    <div style="display: flex;padding: 20px;">
                                        <!-- <div class="grid-3">
                                            <div class="footer-logo">
                                                <div>
                                                    <img src="assets/img/logo.png" alt="">
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="grid-12">
                                            <div class="footer-content">
                                                <div class="footeri">
                                                    <div>
                                                        <a href="Beranda.php">
                                                            <div class="logo">
                                                                <img src="assets/img/logo.png" alt="">
                                                            </div>
                                                        </a>
                                                        <li>Motivation, Inspiration, and Dedication</li>
                                                    </div>
                                                    <ul>
                                                        <li class="head">Fitur</li>
                                                        <li><a href="#search">Cari Event</a></li>
                                                        <li><a href="#rekomendasi"></a> Rekomendasi</li>
                                                        <li><a href="#kategori">Kategori</a></li>
                                                        <li><a href="#blog"></a> Blog</li>
                                                    </ul>
                                                    <ul>
                                                        <li class="head">Kontak</li>
                                                        <li>Facebook</li>
                                                        <li>Instagram</li>
                                                        <li>Bantuan</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
    </script> -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
        
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          slides[slideIndex-1].style.display = "block";  
        
        }
    </script>
    <script>
        function openCity(cityName) {
          var i;
          var x = document.getElementsByClassName("city");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          document.getElementById(cityName).style.display = "block";  
        }
    </script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("oct 4, 2020 14:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo1").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo1").innerHTML = "EXPIRED";
          }
        }, 1000);        
    </script>
    <script>
        // Set the date we're counting down to
        var countDownDate1 = new Date("oct 9, 2020 00:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate1 - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo2").innerHTML = "EXPIRED";
          }
        }, 1000);        
    </script>
    <script>
        // Set the date we're counting down to
        var countDownDate3 = new Date("oct 18, 2020 00:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate3 - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo3").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo3").innerHTML = "EXPIRED";
          }
        }, 1000);        
    </script>
</body>
</html>