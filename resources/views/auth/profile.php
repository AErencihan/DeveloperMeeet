<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Kullanıcı Profili</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #dfe4ea;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .profile {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
        }

        .avatar {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info {
            flex-grow: 1;
            margin-left: 50px;
            padding: 0 20px;
        }
        info h1 {
            font-size: 32px;
            margin: 0;
            padding: 0;
        }

        .info p {
            font-size: 18px;
            margin: 0;
            padding: 0;
        }

        .counts {
            display: flex;
            align-items: center;
        }

        .count {
            flex-grow: 1;
            text-align: center;
        }

        .count h2 {
            font-size: 24px;
            margin: 0;
            padding: 0;
        }

        .count p {
            font-size: 18px;
            margin: 0;
            padding: 0;
        }

        .gallery {
            margin-top: 50px;
        }

        .gallery h1 {
            font-size: 32px;
            margin: 0 0 20px 0;
            padding: 0;
        }

        .photos {
            display: flex;
            flex-wrap: wrap;        }

        .photo {
            position: relative;
            width: calc(33.33% - 20px);
            margin: 10px;
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .photo:hover .overlay {
            opacity: 1;
        }
        .overlay button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            background-color: #fff;
            color: #000;
            border: none;
            cursor: pointer;
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
        header > nav > ul > li:last-child{
            background-color: #ff3838;
            padding:6px 13px;
            border-radius: 150px;
            box-shadow: 1px 2px 7px rgba(0,0,0,0.3);
            cursor:pointer;
        }
        header > nav > ul > li:last-child > a{
            font-size:13px;
            color:white;
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

        .nav2 > ul > li:last-child{
            background-color: #ff3838;
            padding:6px 13px;
            border-radius: 150px;
            box-shadow: 1px 2px 7px rgba(0,0,0,0.3);
            cursor:pointer;
        }
        .nav2 > ul > li:last-child > a{
            font-size:13px;
            color:white;
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
            <li><a href="/signout">Çıkış Yap</a></li>
        </ul>
    </nav>
    <button class="hamburger-menu" id="hamb-menu"><i class="fa-solid fa-bars"></i></button>
    <div class="nav2" id="navMenu2">
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/signout">Çıkış Yap</a></li>
        </ul>
    </div>
</header>
<!--Container-->
<div class="container">
    <div class="profile">
        <div class="avatar">
            <img src="https://i.pravatar.cc/150?img=3" alt="Profil Fotoğrafı">
        </div>
        <div class="info">
            <h1>Kullanıcı Adı: <?php echo $user->first_name; ?> </h1>
            <h4>Mail Adresi:<?php echo $user->email; ?> </h4>
        </div>
        <div class="counts">
            <div class="count">
                <h2>12</h2>
                <p>Katıldığı Etkinlikler</p>
            </div>
            <div class="count">
                <h2>36</h2>
                <p>Takipçiler</p>
            </div>
            <div class="count">
                <h2>24</h2>
                <p>Takip Edilenler</p>
            </div>
        </div>
    </div>

    <div class="gallery">
        <h1>Katıldığı Etkinlikler</h1>
        <div class="photos">
            <?php foreach ($activities as $activity): ?>
                <div class="photo">
                    <div class="overlay">
                        <button>
                            <a href="/detail/<?php echo $activity->id ?>">Daha Fazla Bilgi</a>
                        </button>
                    </div>
                    <img src="<?php  echo  $activity->image_url ?>" alt="Etkinlik Fotoğrafı">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
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
