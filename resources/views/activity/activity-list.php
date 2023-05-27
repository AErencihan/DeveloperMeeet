<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap');
        body {
            margin:0px;
            padding:0px;
            font-family:"ASAP";
            background-color: #dfe4ea;
        }
        h2 {
            color: #0a4870;
            font-weight: 500;
        }
        .mevcut-etkinlik{
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
        }
        ul .booking-card {
            position: relative;
            width: 300px;
            display: flex;
            flex: 0 0 300px;
            flex-direction: column;
            margin: 20px;
            margin-bottom: 30px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            overflow: hidden;
            background-position: center center;
            background-size: cover;
            text-align: center;
            color: #0a4870;
            transition: 0.3s;
        }
        ul .booking-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(10, 72, 112, 0);
            transition: 0.3s;
        }
        ul .booking-card .book-container {
            height: 200px;
        }
        ul .booking-card .book-container .content {
            position: relative;
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            transform: translateY(-200px);
            transition: 0.3s;
        }
        ul .booking-card .book-container .content .btn {
            border: 3px solid white;
            padding: 10px 15px;
            background: none;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 1.3em;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        ul .booking-card .book-container .content .btn:hover {
            background: white;
            border: 0px solid white;
            color: #0a4870;
        }
        ul .booking-card .informations-container {
            flex: 1 0 auto;
            padding: 20px;
            background: #f0f0f0;
            transform: translateY(206px);
            transition: 0.3s;
        }
        ul .booking-card .informations-container .title {
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 1.2em;
        }
        ul .booking-card .informations-container .title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            width: 50px;
            margin: auto;
            background: #0a4870;
        }
        ul .booking-card .informations-container .price {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        ul .booking-card .informations-container .price .icon {
            margin-right: 10px;
        }
        ul .booking-card .informations-container .more-information {
            opacity: 0;
            transition: 0.3s;
        }
        ul .booking-card .informations-container .more-information .info-and-date-container {
            display: flex;
        }
        ul .booking-card .informations-container .more-information .info-and-date-container .box {
            flex: 1 0;
            padding: 15px;
            margin-top: 20px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            background: white;
            font-weight: bold;
            font-size: 0.9em;
        }
        ul .booking-card .informations-container .more-information .info-and-date-container .box .icon {
            margin-bottom: 5px;
        }
        ul .booking-card .informations-container .more-information .info-and-date-container .box.info {
            color: #ec992c;
            margin-right: 10px;
        }
        ul .booking-card .informations-container .more-information .disclaimer {
            margin-top: 20px;
            font-size: 0.8em;
            color: #7d7d7d;
        }
        ul .booking-card:hover::before {
            background: rgba(10, 72, 112, 0.6);
        }
        ul .booking-card:hover .book-container .content {
            opacity: 1;
            transform: translateY(0px);
        }
        ul .booking-card:hover .informations-container {
            transform: translateY(0px);
        }
        ul .booking-card:hover .informations-container .more-information {
            opacity: 1;
        }
        @media (max-width: 768px) {
            ul .booking-card::before {
                background: rgba(10, 72, 112, 0.6);
            }
            ul .booking-card .book-container .content {
                opacity: 1;
                transform: translateY(0px);
            }
            ul .booking-card .informations-container {
                transform: translateY(0px);
            }
            ul .booking-card .informations-container .more-information {
                opacity: 1;
            }
        }
        .credits a {
            color: #e3ebf1;
        }
        h1 {
            margin: 10px -40px;
            padding: 40px;
            text-align: center;
        }


        /*Eray Header Başlangıç */
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
<!--Eray Header Başlangıç-->
<header>
    <span>Developer <b>Meet</b></span>
    <nav>
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/konular">Forum</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/profile">Hesabım</a></li>
        </ul>
    </nav>
    <button class="hamburger-menu" id="hamb-menu"><i class="fa-solid fa-bars"></i></button>
    <div class="nav2" id="navMenu2">
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/konular">Forum</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/profile">Hesabım</a></li>
        </ul>
    </div>
</header>
<h1>Mevcut Etkinlikler</h1>
<ul class="mevcut-etkinlik">
    <?php foreach ($activitiesArray as $activity): ?>

    <li id="<?php echo $activity->id ?>" class="booking-card" style="background-image: url(<?php echo $activity->image_url ?>)">
        <div class="book-container">
            <div class="content">
                <button class="btn">Detay</button>
            </div>
        </div>
        <div class="informations-container">
            <h2 class="title"><?php echo $activity->title ?></h2>
            <p class="sub-title"><?php echo $activity->first_name?></p>
            </svg> <?php echo $activity->date ?></p>
            <div class="more-information">
                <div class="info-and-date-container">
                    <div class="box info">
                        <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
                        </svg>
                        <p>Parc des expositions à NANTES</p>
                    </div>
                    <div class="box date">
                        <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
                        </svg>
                        <p>Samedi 1er février 2020</p>
                    </div>
                </div>
                <p class="disclaimer"><?php echo $activity->description ?></p>
            </div>
        </div>
    </li>
    <?php endforeach; ?>
</ul>


<script>
    const btns = document.querySelectorAll('.btn');
    btns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const card = e.target.closest('.booking-card');
            const activityId = card.id;
            const url = '/detail/' + activityId;
            // target olarak olduğu yerde açar
            window.open(url, '_self');
        });
    });


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
