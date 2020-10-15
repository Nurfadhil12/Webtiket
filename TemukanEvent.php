<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loket</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="assets/OwlCarousel/owl.carousel.min.css">
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
        .wadah {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
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
        .navbar ul{
            padding: 0px 140px;
            display: flex;
            color: #16056B;
        }
        .navbar li{
            display: flex;
            margin: 0px 28px;
            font-size: 18px;
        }
        .logo img{
            max-width: 80px;
        }
        .section{
            margin: 40px;
        }
        .content-judul{
            font-weight: 600;
            font-size: 64px;
            line-height: 96px;
            /* identical to box height */
            text-align: center;
            color: #16056B;
            margin-bottom: 50px;

        }
        
        .card{
            position: relative;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: #ffffff;
            border-radius: 15px;
            -webkit-box-shadow: 0 2px 6px 0 rgba(28,29,29,.25);
            box-shadow: 0 2px 6px 0 rgba(28,29,29,.25);
            overflow: hidden;
            
        }
        .label{
            background: rgba(180, 215, 254, 0.5);
            border-radius: 40px;
            width: 190px;
            padding: 5px 12px;
            letter-spacing: 0.3em;
            color: #5696F4;
            text-align: center;
        }
        .button-label{
            background: #F3F3F3;
            opacity: 0.75;
            border-radius: 100px;
            text-align: center;
            width: 150px;
            height: 40px;
            padding-top: 7px;
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
        margin: 9px 7px 0px 95px;
        background-color: #FD9519;
        color: #ffffff;
        font-size: 18px;
    }
        .footer-content{
            display: flex;
        }
        .footer-content ul{
            margin:0px 18px;
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
            color: #636363;
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
    <div class="wadah-semua" style="background-color: #ffffff;">
        <header>
            <div class="wadah">
                <div class="baris header-top">
                    <div class="grid-3">
                        <a href="#">
                            <div class="logo">
                                <img src="assets/img/logo.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="grid-6">
                        <div class="navbar">
                            <nav>
                                <ul>
                                    <li>
                                        Event
                                    </li>
                                    <li>
                                        Buat Event
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="grid-3">
                        <a href="#">
                            <button style="float: right;
                            display: block;
                            width: 125px;
                            height: 50px;
                            background: #FD9519;
                            border-radius: 100px;
                            border: none;
                            color: #ffffff;">Masuk</button>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container1">
            <div class="section">
            </div>
            <div class="grid-12">
                <div>
                    <div class="content-judul">
                        TEMUKAN EVENT
                    </div>
                </div>
            </div>
            <div class="wadah" style="background: url(assets/img/bg3.png);
            background-repeat: no-repeat;">
                <div class="baris">
                   <div style="padding: 60px 0px;">
                    <div style="display: flex;">
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="section">
                    </div>
                    <div style="display: flex;">
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="section">
                    </div>
                    <div style="display: flex;">
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="section">
                    </div>
                    <div style="display: flex;">
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="section">
                    </div>
                    <div style="display: flex;">
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="section">
                    </div>
                    <div style="display: flex;">
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-4">
                            <div class="card">
                                <div style="padding: 15px;">
                                    <div>
                                        <img src="assets/img/gambar1.png" alt="">
                                    </div>
                                    <div style="margin:0px 10px">
                                        <div class="judul">
                                            <div style="font-size: 18px;line-height: 30px;color: #16056B;">
                                                Millenial Sukses Ala Wirda M.
                                            </div>
                                            <div style="line-height: 30px;color: #636363;opacity: 0.75;">
                                                Tips N Trick Millenial Sukses
                                            </div>
                                        </div>
                                        <div>
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
                                                    29 Agustus 2020
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
                                            <button style="/* float: right; */
                                            background: #FD9519;
                                            border-radius: 16px 0px;
                                            border: none;
                                            color: #ffffff;
                                            width: 115px;
                                            height: 55px;
                                            position: absolute;
                                            margin: -35px 210px;">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="section">
                    </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="section"></div>
        <div class="container2">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <footer>
                            <div class="footer-wadah">
                                <div class="grid-12">
                                    <div style="display: flex;padding: 20px;">
                                        <div class="grid-3">
                                            <div class="footer-logo">
                                                <div>
                                                    <img src="assets/img/logo.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-9">
                                            <div class="footer-content">
                                                <div class="footeri">
                                                    <ul>
                                                        <li class="head">Fitur</li>
                                                        <li>Cari Event</li>
                                                        <li>Lihat Event</li>
                                                        <li>Buat Event</li>
                                                        <li>Beli Tiket</li>
                                                        <li>Masuk</li>
                                                        <li>Blog</li>
                                                    </ul>
                                                    <ul>
                                                        <li class="head">Kategori</li>
                                                        <li>Musik</li>
                                                        <li>Workshop</li>
                                                        <li>Olahraga</li>
                                                        <li>Festival</li>
                                                        <li>Teater & Drama</li>
                                                        <li>Atraksi</li>
                                                        <li>Semua Kategori</li>
                                                    </ul>
                                                    <ul>
                                                        <li class="head">Lokasi Event</li>
                                                        <li>Jakarta</li>
                                                        <li>Bandung</li>
                                                        <li>Yogyakarta</li>
                                                        <li>Solo</li>
                                                        <li>Surabaya</li>
                                                        <li>Bali</li>
                                                        <li>Semua Kota</li>
                                                    </ul>
                                                    <ul>
                                                        <li class="head">Kontak</li>
                                                        <div style="display: flex;">
                                                            <div>
                                                                <img src="assets/img/WA.png" alt="">
                                                            </div>
                                                            <div>
                                                                <img src="assets/img/FB.png" alt="">
                                                            </div>
                                                            <div>
                                                                <img src="assets/img/IG.png" alt="">
                                                            </div>
                                                        </div>
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
</body>
</html>