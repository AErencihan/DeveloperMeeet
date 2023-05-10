<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Developer Meet</title>

    <style>

        html, body {
            height: 100%;
        }

        body {
            background-color: #1f1f3b;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #title {
            color: #fff;
            font-size: 72px;
            opacity: 0;
            transition: all 1s;
        }

        #button {
            margin-top: 50px;
            padding: 15px 30px;
            font-size: 24px;
            background-color: #fff;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        nav {
            display: flex;
            justify-content: flex-end;
            width: auto;
            padding: 20px;
            background-color: #1f1f3b;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1;

        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<nav>
    <a href="/konular">Forum</a>
    <a href="/contact">İletişim</a>
    <a href="/profile">Hesabım</a>
</nav>

<div id="container">
    <h1 id="title">Developer Meet</h1>
    <button href="/etkinlikler" id="button">Etinliklere Git</button>
</div>
<img src="https://i.hizliresim.com/17c1h8f.jpg" alt="Resim">
<script>
    const title = document.getElementById("title");
    const button = document.getElementById("button");

    let opacity = 0;
    let intervalID = setInterval(() => {
        opacity += 0.05;
        title.style.opacity = opacity;
        title.style.transform = "translateX(-" + (1 - opacity) * 100 + "px)";
        if (opacity >= 1) clearInterval(intervalID);
    }, 50);

    // maouse butona geldiğinde butonun rengini değiştir
    button.addEventListener("mouseover", () => {
        button.style.backgroundColor = "#0e1133";
        button.style.color = "#fff";
    });

    // mouse butondan ayrıldığında butonun rengini değiştir
    button.addEventListener("mouseout", () => {
        button.style.backgroundColor = "#fff";
        button.style.color = "#000";
    });


    button.addEventListener("click", () => {
        window.location.href = "/etkinlikler";
    });


</script>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Meet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap');
        body{
            margin:0px;
            padding:0px;
            background-color: #dfe4ea;
            height: 100vh;
        }
        
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
        header > nav > ul > li:last-child{
            background-color: #bdc3c7;
            padding:6px 7px;
            border-radius: 150px;
            box-shadow: 1px 2px 7px rgba(0,0,0,0.1);
            cursor:pointer;
        }
        header > nav > ul > li:last-child > a{
            font-size:13px;
        }
        header > nav > ul > li > a{
            text-decoration: none;
            font-size:13px;
            color: #4b4b4b;
            font-family: "ASAP";
        }
        .container{
            width:100%;
            height: 85%;
            /* background-color: red; */
            display:flex;
            flex-direction: row;
        }
        /* left text and button container */
        .left-container{
            width:35%;
            height: 100%;
            /* background-color: green; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .left-container > *{
            margin-bottom:10px;
            font-family: "ASAP";
        }
        .left-container > .dev-meet-text{
            font-size:50px;
            animation-name: mymove;
        }
        .left-container > .go-to-activity{
            border:none;
            outline:none;
            padding:12px 20px;
            border-radius:20px;
            box-shadow: 2px 2px 6px rgba(0,0,0,.4);
            cursor:pointer;
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
        .nav2 > ul > li:last-child{
            background-color: #bdc3c7;
            padding:6px 7px;
            border-radius: 150px;
            box-shadow: 1px 2px 7px rgba(0,0,0,0.1);
            cursor:pointer;
        }
        .nav2 > ul > li:last-child > a{
            font-size:13px;
        }
        .nav2 > ul > li > a{
            text-decoration: none;
            font-size:13px;
            color: #4b4b4b;
            font-family: "ASAP";
        }

    



        /*right photo container*/
        .right-container{
            width:65%;
            height: 100%;
            /* background-color: yellow; */
            display:flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
       
        /* Responsive */
        @media (max-width:800px){
            .container{
                flex-direction: column-reverse;
            }
            .left-container{
                width:100%;
                height: 35%;
            }
            .right-container{
                width:100%;
                height: 65%;
            }
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
<!-- Header -->
<header>
    <span>Developer <b>Meet</b></span>
    <nav>
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/forum">Forum</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/profile">Hesabım</a></li>
        </ul>
    </nav>
    <button class="hamburger-menu" id="hamb-menu"><i class="fa-solid fa-bars"></i></button>
    <div class="nav2" id="navMenu2">
        <ul>
            <li><a href="#">Anasayfa</a></li>
            <li><a href="/forum">Forum</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/profile">Hesabım</a></li>
        </ul>
    </div>
</header>
<!-- Container -->
<div class="container">
    <div class="left-container">
        <div class="dev-meet-text">Developer<br> Meet</div>
        <button class="go-to-activity" id="button">Etkinliklere Git</button>
    </div>
    <div class="right-container">,
        <img src="https://i.hizliresim.com/17c1h8f.jpg" alt="Resim">
    </div>
</div>



<script>
    const button = document.getElementById("button");
    const hamburgerButton = document.getElementById("hamb-menu");

    button.addEventListener("click", () => {
        window.location.href = "/etkinlikler";
    });

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
