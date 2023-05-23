<!DOCTYPE html>
<html>
<head>
    <title>Etkinlik Oluşturma Formu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap');
        body {
            font-family: Arial, sans-serif;
            background-color: #dfe4ea;
            padding:0px;
            margin:0px;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
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
<!-- <nav>
    <a href="#" class="logo"></a>
    <a href="/">Anasayfa</a>
    <a href="/contact">İletişim</a>
    <a href="/forum">Forum Oluştur</a>
</nav> -->
<!--Header-->
<header>
    <span>Developer <b>Meet</b></span>
    <nav>
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/forum">Forum Oluştur</a></li>
        </ul>
    </nav>
    <button class="hamburger-menu" id="hamb-menu"><i class="fa-solid fa-bars"></i></button>
    <div class="nav2" id="navMenu2">
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/forum">Forum Oluştur</a></li>
        </ul>
    </div>
</header>
<!--Container-->
<h1>Etkinlik Oluşturma Formu</h1>
<form action="/activity-create" method="post" enctype="multipart/form-data">
    <label for="etkinlik-ad">Etkinlik Adı:</label>
    <input type="text" id="etkinlik-ad" name="title">

    <label for="tarih">Tarih:</label>
    <input type="date" id="tarih" name="date">

    <label for="saat">Saat:</label>
    <input type="time" id="saat" name="saat">

    <label for="aciklama">Açıklama:</label>
    <textarea id="aciklama" name="description" rows="4" cols="50"></textarea>

    <label for="resim">Resim:</label>
    <input type="file" id="resim" name="resim">

    <?php
    $lat = $_POST['lat'];
    $lot = $_POST['lot'];
    ?>
    <label hidden="hidden" for="lat">lat:</label>
    <input type="text" id="lat" name="lat" value="<?php echo $lat?>">


    <label hidden="hidden" for="lot">lat:</label>
    <input type="text" id="lat" name="lot" value="<?php echo $lot?>">


    <input type="submit" value="Etkinlik Oluştur">
</form>
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
