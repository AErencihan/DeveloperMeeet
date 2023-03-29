<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--
        <link rel="stylesheet" type="text/css" href="../css/mainpagecss.css">
        <link href="{{ asset('css/mainpagecss.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ URL::asset('css/mainpagecss.css') }}" rel="stylesheet" type="text/css" >
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <style type="text/css">
        body {
            margin: 0px;
            padding: 0px;
            /*background: #dfe4ea;*/
            background: rgb(0, 90, 222);
            background: linear-gradient(90deg, rgba(0, 90, 222, 0.5746673669467788) 6%, rgba(128, 142, 155, 1) 19%, rgba(158, 158, 207, 1) 66%, rgba(147, 173, 193, 1) 88%);
            width: 100%;
            height: 100vh;
        }

        header {
            height: 10vh;
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;

        }

        header > .logo {
            color: #4b4b4b;
            font-size: 15px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }

        header > nav.menu > ul {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            list-style: none;
        }

        header > nav.menu > ul > li {
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            color: #4b4b4b;
            margin-right: 10px;
        }

        header > nav.menu > ul > li:Hover {
            transition: .5s;
            cursor: pointer;
            opacity: .5;
        }

        header > div.log > button {
            border: none;
            outline: none;
            background-color: #4b7bec;
            color: White;
            font-family: 'Montserrat', sans-serif;
            padding: 5px 15px;
            border-radius: 35px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        header > div.log > button:hover {
            opacity: .5;
            transition: .5s;
            cursor: pointer;
        }

        .mainpageBody {
            display: flex;
            width: 100%;
            height: 90vh;
            flex-direction: row;

        }

        .mainpageBody > .section1 {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: white; */
        }

        .mainpageBody > .section2 {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: right;
            font-size: 55px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: #4b4b4b;
            /* background-color: white; */

        }

        .section2 > .section2InnerContainer {
            width: 400px;
            height: 500px;
            /* background-color: red; */
            display: flex;
            justify-content: center;
            align-items: right;
            flex-direction: column;
        }

        .section2 > .section2InnerContainer > .getStarted {
            width: 95%;
            height: 45px;
            border: none;
            outline: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 14px;
            background-color: #4b7bec;
            color: White;
            transition: .5s;
            margin-top: 15px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
        }

        .section2 > .section2InnerContainer > .getStarted:hover {
            cursor: pointer;
            opacity: .4;
            transition: .5s;
        }

        .swiper {
            width: 500px;
            height: 250px;
        }

        @media (max-width: 900px) {
            body {
                height: auto;
            }

            .mainpageBody {
                display: flex;
                flex-direction: column;
            }

            .mainpageBody > .section1 {
                width: 100%;
                height: 50%;
            }

            .mainpageBody > .section2 {
                width: 100%;
                height: 50%;
                margin: 40px 0px;
                padding: 40px 0px;
                /* box-sizing: border-box; */
            }
        }

        @media (max-width: 500px) {
            .section2InnerContainer {
                font-size: 45px;
                width: 100%;
                height: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="logo">
        <span>Developer Meet</span>
    </div>
    <nav class="menu">
        <ul>
            <li>Hakkımızda</li>
            <li>Misyonumuz</li>
            <li>İletişim</li>
    </nav>
    <div class="log">
        <button>Giriş Yap</button>
    </div>
</header>
<section class="mainpageBody">
    <div class="section1">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"></div>
                <div class="swiper-slide"></div>
                <div class="swiper-slide"></div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            If we need scrollbar
        </div>
    </div>
    <div class="section2">
        <div class="section2InnerContainer">
            <div>DEVELOPER MEET</div>
            <div>YAZILIMCI TOPLULUĞU</div>
            <form action="/signup" method="GET">
                <button type="submit">Kayıt Ol</button>
            </form>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>

</body>
</html>

<?php
session_start();
try {
    $activeUser = $_SESSION['user'];
}catch (Exception $e) {
    $activeUser = null;
}
if ($activeUser == null) {
    header("Location: /login");
}
