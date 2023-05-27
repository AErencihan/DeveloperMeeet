<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ETKİNLİK DETAYLARI</title>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap');
        body{
            margin:0px;
            padding:0px;
            background-color: #dfe4ea;
            height: 100vh;
        }





        /*Erayın Header Eklediği alan */
        header{
            width:100%;
            height: 70px;
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

        /* container kodları */
        .container{
            display:flex;
            width:100%;
            height:89vh;
            /* background:Red; */
        }
        .left-area,.right-area{
            height:100%;
        }
        .left-area{
            width:40%;
            /* background:blue; */
            display:flex;
            flex-direction:column;
        }
        .left-up{
            width:100%;
            height:50%;
            overflow:hidden;
        }
        .left-up > img{
            width:100%;
            height:100%;
        }
        .left-down{
            display:Flex;
            justify-content:center;
            align-items:center;
        }
        .right-area{
            width:60%;
            /* background:gray; */
        }
        .left-down > ul > li{
            list-style:none;
            margin-bottom:12px;
            text-align:center;
        }
        .button-etkinlik-join{
            background:green;
            padding:10px 15px;
            text-decoration:none;
            border-radius:5px;
            color:white;
            font-family:"ASAP";
            box-shadow:2px 2px 5px rgba(0,0,0,.2);
        }
        .text-properties{
            font-family:"ASAP";
            font-size:19px;
            color:#2f3640;
        }

        @media (max-width:800px){
            .container{
                height:auto;
                flex-direction: column-reverse;
            }
            .left-area{
                width:100%;
            }
            .left-up > img{
                height:300px
            }
            .right-area{
                width:100%;
                height:300px;
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

<?php $id = $activity->title; ?>
<?php $primaryKey = $activity->id; ?>
<?php $imgae_url = $activity->image_url; ?>
<?php $description = $activity->description; ?>
<?php $date = $activity->date; ?>
<?php $lat = $activity->lat; ?>
<?php $lot = $activity->lot; ?> 


<div class="container">
    <div class="left-area">
        <div class="left-up">
            <img class="card-image" src="<?php echo $imgae_url; ?>"></img>   
        </div>
        <div class="left-down">
            <ul>
                <li class="text-properties">
                    <h1> Aktivite Başlığı : <?php echo $id; ?></h1>
                </li>
                <li class="text-properties">
                    <strong>Aktivite Açıklaması :</strong>
                    <?php echo $description; ?>
                </li>
                <li class="text-properties"><strong>Tarih:</strong>
                    <?php echo $date; ?>
                </li>
                <li>
                    <a href="/etkinlige-katıl/<?php echo $primaryKey ?>" class="button-etkinlik-join">Etkinliğe Katıl</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="right-area">
        <div id="map" style="width: 100%; height: 100%;"></div>
    </div>

</div>
<script>

    // gelen koordinatları buraya yazdır
    var $lat = <?php echo $lat; ?>;
    var $lot = <?php echo $lot; ?>;

    mapboxgl.accessToken = 'pk.eyJ1IjoiZnVya2Fubnptbm5uIiwiYSI6ImNsZnNyeXdkdTA5NWczZXBjc3pjbDIxZ28ifQ._9HBjcFn3VCeNS5xmw3B_Q';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [$lot, $lat],
        zoom: 10
    });

    var marker = new mapboxgl.Marker()
        .setLngLat([$lot, $lat])
        .addTo(map);

    map.on('click', function (e) {
        var coordinates = e.lngLat;
        var lng = coordinates.lot;
        var lat = coordinates.lat;
        console.log('Seçilen koordinatlar: ' + coordinates.lot + ', ' + coordinates.lat);
        marker.setLngLat(coordinates);

        map.flyTo({
            zoom: 20,
            speed: 0.5,
            curve: 1,
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
