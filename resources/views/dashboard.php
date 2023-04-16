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
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap');
        body {
            margin: 0px;
            padding: 0px;
            /*background: #dfe4ea;*/
            width: 100%;
            height: 100vh;
            box-sizing:border-box !important;
        }

        .menu2{
            display:none !important;
            font-family:"ASAP";
            color: #4b4b4b;
            font-weight: bold;
            height: 10vh;

            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background: rgb(0, 90, 222);
            background: linear-gradient(90deg, rgba(0, 90, 222, 0.5746673669467788) 6%, rgba(128, 142, 155, 1) 19%, rgba(158, 158, 207, 1) 66%, rgba(147, 173, 193, 1) 88%);
        }
        .menu2-inner-content{
            display:none;
            width:100%;
            height:100vh;
            background:gray;
            position:sticky;
            z-index:999;
            top:0;
        }
        header {
            height: 10vh;
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background: rgb(0, 90, 222);
            background: linear-gradient(90deg, rgba(0, 90, 222, 0.5746673669467788) 6%, rgba(128, 142, 155, 1) 19%, rgba(158, 158, 207, 1) 66%, rgba(147, 173, 193, 1) 88%);
        }
        header > .logo {
            font-size: 15px;
            font-family: "ASAP";
            font-weight: bold;
        }
        header > .logo > a {
            color: #4b4b4b;
            text-decoration:none;
        }

        header > nav.menu > ul {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            list-style: none;
        }

        header > nav.menu > ul > li {
            font-family: "ASAP";
            font-size: 12px;
            margin-right: 10px;
        }
        header > nav.menu > ul > li > a{
            text-decoration:none;
            color: #4b4b4b;
        }

        header > nav.menu > ul > li:Hover {
            transition: .5s;
            cursor: pointer;
            opacity: .5;
        }

        header > div.log > a > button {
            border: none;
            outline: none;
            background-color: #4b7bec;
            font-family: "ASAP";
            color:White;
            padding: 5px 15px;
            border-radius: 35px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }
        header > div.log > a {
            text-decoration:none;
        }

        header > div.log > a > button:hover {
            opacity: .5;
            transition: .5s;
            cursor: pointer;
        }

        .mainpageBody {
            display: flex;
            width: 100%;
            height: 90vh;
            flex-direction: row;
            overflow:hidden;
            background: rgb(0, 90, 222);
            background: linear-gradient(90deg, rgba(0, 90, 222, 0.5746673669467788) 6%, rgba(128, 142, 155, 1) 19%, rgba(158, 158, 207, 1) 66%, rgba(147, 173, 193, 1) 88%);
        }

        .mainpageBody > .section1 {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background:blue; */
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
            /* background:black; */
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

        .sign-up-button{
            width: 95%;
            height: 45px;
            color:white;
            border: none;
            outline: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 14px;
            background-color: #4b7bec;
            transition: .5s;
            margin-top: 15px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
        }
        .section2InnerContainer > a{
            text-decoration:none;

        }

        .sign-up-button:hover{
            cursor: pointer;
            opacity: .4;
            transition: .5s;
        }

        .swiper {
            width: 500px;
            height: 250px;
        }
        /* firmalar */
        .companies{
            width:100%;
            height:30vh;
            padding:10px;
            box-sizing:border-box;
            background-color:#dfe4ea;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 19px;
            color: #4b4b4b;
            text-transform:uppercase;
        }
        .inner-logos{
            background:red;
            width:80%;
            height:100%;
        }
        /* yazı içerikleri */
        .inner-content-explain{
            width:100%;
            height:100vh;
            display:flex;
            flex-direction:row;
            padding:10px;
            box-sizing:border-box;
            background-color:#dfe4ea;
            /* background:red; */
        }
        .inner-content-explain2{
            flex-direction:row-reverse;

        }
        .photo-area, .text-area{
            width:50%;
            height:100%;

        }
        .photo-area{
            /* background-color:red; */
            padding:120px;
            box-sizing:border-box;
        }
        .text-area{
            /* background-color:gray; */
            padding:20px 45px;
            box-sizing:border-box;
            font-family:"ASAP";
        }
        .text-area > h3{
            width:100%;
            text-align:center;
        }

        /*footer*/
        footer{
            width:100%;
            height:250px;
            background: rgb(0, 90, 222);
            background: linear-gradient(90deg, rgba(0, 90, 222, 0.5746673669467788) 6%, rgba(128, 142, 155, 1) 19%, rgba(158, 158, 207, 1) 66%, rgba(147, 173, 193, 1) 88%);
            box-shadow:-2px -2px 7px rgba(0,0,0,.3);
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .inner-footer{
            width:90%;
            height:100%;
            /* background:green; */
            display:flex;
            flex-direction:row;
        }
        .inner-left-footer,.inner-right-footer{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        /* left footer */
        .inner-left-footer{
            width:30%;
            height:100%;
            /* background: red; */
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .inner-left-footer > ul{

            list-style:none;
        }
        .inner-left-footer > ul > li{
            margin-bottom:15px;
        }
        .inner-left-footer > ul > li > a{
            font-family:"ASAP";
            font-weight:400;
            text-decoration:none;
            text-transform:uppercase;
            font-size: 11px;
            color:white;
        }
        .inner-left-footer > ul > li > a:hover{
            color:rgba(255,255,255,.3);
            transition:.3s;
        }
        /* Right Footer */
        .inner-right-footer{
            width:70%;
            height:100%;
            /* background:black; */
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .container-news{
            width:80%;
            height:40px;
            display:flex;
            flex-direction:row;
            background:gray;
            overflow:hidden;
            border-radius:2px;
        }
        .container-news-left{
            width:30%;
            height:100%;
            background:#576574;
            display:flex;
            justify-content:center;
            align-items:center;
            cursor:pointer;
        }
        .container-news-right{
            width:70%;
            height:100%;
            background:yellow;
        }

        .container-news > .container-news-left > span{
            font-size:17px;
        }
        .container-news > .container-news-right > form > input[type="text"]{
            width:100%;
            height:40px;
            text-indent:20px;
            outline:none;
            border:none;
        }
        .required-page-end{
            color:White;
            font-size:16px;
            font-family:"ASAP";
            font-weight:200;
            margin-bottom:15px;
            box-sizing:border-box;
        }

        @media (max-width: 900px) {
            header{
                display:flex;
            }
            .menu2{
                display:none;
            }
            body {
                height: auto;
            }
            .mainpageBody > .section1 {
                display:none;
            }
            .mainpageBody > .section2 {
                width: 100%;
                height: 1*0%;
                padding: 40px 20px;
                box-sizing: border-box;
            }

        }
        @media (max-width:800px){
            header{
                display:flex;
            }
            .menu2{
                display:none;
            }
            .mainpageBody > .section1 {
                display:none;
            }
            .inner-content-explain{
                flex-direction:column;
                height:auto;
            }
            .photo-area, .text-area{
                width:100%;
                height:auto;
            }
            .inner-footer{
                flex-direction:column;
            }
            .inner-left-footer{
                width:100%;
            }
            .inner-right-footer{
                width:100%;
            }
            .mainpageBody > .section1{
                margin-top:-125px !important;
            }
        }

        @media (max-width: 600px) {
            .section2InnerContainer {
                font-size: 35px;
                width: 100%;
                height: 100%;
                text-align: center;
            }
            header{
                display:none;
            }
            .menu2{
                display:flex !important;
            }
        }

         /* ::-webkit-scrollbar{
            background-color: #F5F5F5;
            float: left;
            height: 300px;
            margin-bottom: 25px;
            margin-left: 22px;
            margin-top: 40px;
            width: 15px;
            overflow-y: scroll;
        }
        ::-webkit-scrollbar-track {
            box-shadow: 0 0 5px rgba(0,0,0,.2);
        }

        ::-webkit-scrollbar-thumb {
            background: #4b4b4b;
        } */
    </style>
</head>
<body>
    <div class="menu2-inner-content">

        <button onclick="closeMenu()">close button</button>
    </div>
    <header>
        <div class="logo">
            <a href="/dashboard"><span>Developer Meet</span></a>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="/konular">Forum</a></li>
                <li><a href="/etkinlikler">Meet</a></li>
                <li><a href="/contact">İletişim</a></li>
        </nav>
        <div class="log">
            <a href="/signin"><button>Giriş Yap</button></a>
        </div>
    </header>
    <div class="menu2">
        <div class="logo">
            <span>Developer Meet</span>
        </div>
        <div class="hamburger menu">
            <button onclick="openMenu()">Hamburger Menu</button>
        </div>

    </div>

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
                <div>DEVELOPER MEET <br>YAZILIMCI TOPLULUĞU</div>
                <a href="/signup"><button type="submit" class="sign-up-button">Kayıt Ol</button></a>
            </div>
        </div>
    </section>


    <section class="inner-content-explain">
        <div class="photo-area">
            <img src="/photos/startup.jpg"/>
        </div>
        <div class="text-area">
            <h1>Başlık</h1>
            Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.
        </div>
    </section>
    <section class="inner-content-explain inner-content-explain2">
        <div class="photo-area">
            <img src="/photos/startup.jpg"/>
        </div>
        <div class="text-area">
            <h1>Başlık</h1>
            Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.
        </div>
    </section>
    <section class="companies">
        <h3>Sponsorlu Topluluklarımız</h3>
        <div class="inner-logos">

        </div>
    </section>
    <footer>
        <div class="inner-footer">
            <div class="inner-left-footer">
                <ul>
                    <li><a href="#">Anasayfa</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Meet</a></li>
                    <li><a href="/contact">İletişim</a></li>
                </ul>
            </div>
            <div class="inner-right-footer">
                <div class="container-news">
                    <div class="container-news-left">
                        <span>icon</span>
                    </div>
                    <div class="container-news-right">
                        <form>
                            <input type="text" placeholder="Bültenimize abone olmak için"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="required-page-end">© Developer Meet Tüm Hakları Saklıdır</div>
    </footer>

<!--script files-->
<script type="text/javascript">
    function closeMenu(){
        try {
            document.getElementById("menu2-inner-content").style.display = "none";
        } catch (error) {
            console.log('Bir hata oluştu: ' + error.message);
        }


    }
    function openMenu(){
        try {
            document.getElementById("menu2-inner-content").style.display = "block";
        } catch (error) {
            console.log('Bir hata oluştu: ' + error.message);
        }
    }
</script>
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
?>
