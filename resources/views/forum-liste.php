<!DOCTYPE html>
<html>
<head>
    <title>Tüm Gönderiler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap');
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #dfe4ea;
        }
        .forum-list-container{
            /* background:red; */
            padding:5px 20px;
            box-sizing:border-box;
        }
        .forum-list-container > ul{
            margin:0px;
            padding:0px;
        }
        .forum-list-container > ul > li{
            list-style-type: none;
            background:white;
            padding:5px 15px;
            margin:25px 5px;
            box-sizing:border-box;
            border-radius:5px;
            box-shadow: 5px 5px 15px rgba(0,0,0,.2);
            cursor:pointer;
        }
        .forum-list-container > ul > li > a{
            text-decoration:none;
        }
        .forum-info{
            font-family:"ASAP";
        }
        .forum-title{
            color:#2f3640;
            font-weight:800;
            font-size:20px;
        }
        .forum-details{
            color:#57606f;
        }
        .forum-stats{
            margin:10px 0px;
            box-sizing:border-box;
        }
        .forum-stats > a{
            color: #2f3542 !important;
        }

        /* erayın eklediği header kodları */

        /*  buraya el ile yazdığım resp navbar ekleniyor */
        header{
            width:100%;
            height: 70px;
            /* box-shadow: 3px 3px 40px rgba(0,0,0,.2); */
            display:flex;
            justify-content: space-around;
            align-items: center;
            list-style-type: none;
            position: relative;
        }
        header > span{
            font-family: 16px;
            font-family: "ASAP";
        }
        header > nav > ul{
            margin-top:13px;
        }
        header > nav > ul > li{
            display: inline-block;
            margin-right:5px;
        }
        header > nav > ul > li > a{
            text-decoration: none;
            font-size:13px;
            color: #4b4b4b;
            font-family: "ASAP";
        }
        header > nav > ul > li > a:hover{
            text-decoration: none;
            font-size:13px;
            color: #4b4b4b;
            font-family: "ASAP";
        }

        /*Hamburger Menu*/
        .hamburger-menu{
            display:none;
            border: none;
            outline: none;
            background:none;
            cursor: pointer;
            font-size:22px;
        }
        /*nav2*/
        .nav2{
            display: none;
            width:100%;
            height: 300px;
            background-color: #dfe4ea;
            box-shadow: 5px 5px 5px rgba(0,0,0,.3);
            position: absolute;
            top:70px;
            z-index:999;
        }
        .nav2 > ul > li{
            display: block;
            text-align: center;
            margin-bottom:25px;
        }
        .nav2 > ul > li > a{
            text-decoration: none;
            font-size:13px;
            color: #4b4b4b;
            font-family: "ASAP";
        }

         /* Responsive */
         @media (max-width:800px){
            nav{
                display: none;
            }
            .hamburger-menu{
                display: block;
            }
            .nav2{
                display: none;
            }

        }
        @media (min-width:800px) {
            .nav2{
                display: none !important;
            }
        }

        
 

    </style>
</head>
<body>

<!--Header-->
<header>
    <span>Developer <b>Meet</b></span>
    <nav>
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/etkinlik-olustur">Etkinlik Oluştur</a></li>
            <li><a href="/forum">Forum Oluştur</a></li>
        </ul>
    </nav>
    <button class="hamburger-menu" id="hamb-menu"><i class="fa-solid fa-bars"></i></button>
    <div class="nav2" id="navMenu2">
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/etkinlik-olustur">Etkinlik Oluştur</a></li>
            <li><a href="/forum">Forum Oluştur</a></li>
        </ul>
    </div>
</header>
<div class="forum-list-container">
    <ul class="forum-list">
        <?php foreach ($posts as $post): ?>
        <li>
            <a href="/forum/1">
                <div class="forum-info">
                    <h3 class="forum-title">Forum Başlığı: <?php echo $post->title ?></h3>
                    <span class="forum-details"><?php echo $post->content ?></span>
                </div>
                <div class="forum-stats">
                    <a href="/konu/<?php echo $post->id ?>" class="forum-list">Detay</a>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<script type="text/javascript">
    const hamburgerButton = document.getElementById("hamb-menu");

    hamburgerButton.addEventListener("click", () => {
        let navMenu = document.getElementById("navMenu2");
        if(navMenu.style.display == "block"){
            navMenu.style.display = "none";
        }
        else{
            navMenu.style.display = "block";
        }
    });
</script>
</body>
</html>
