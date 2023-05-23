<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HARİTA</title>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>

    <style>
         @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap');
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family:"ASAP";
        }

        #map {
            width: 900px;
            height: 400px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        form input {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            width: 300px;
            max-width: 100%;
        }

        form button {
            visibility: hidden;
            margin-top:20px;
            border:none;
            outline:none;
            background:black;
            color:white;
            font-family:"ASAP";
            font-size:13px;
            border-radius:20px;
            box-shadow: 2px 2px 6px rgba(0,0,0,.4);
            cursor:pointer;
        }
        input, button {
            margin-top: 10px;
            height: 30px;
            width: 200px;
        }

        .map-container{
            width:100%;
            height:100vh;
            display:flex;
            flex-direction:row;
            background-color:#dfe4ea;
        }
        .map-details{
            width:30%;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:-150px;
        }
        #map{
            width:70%;
            height:100%;
            box-shadow:-2px 0px 12px rgba(0,0,0,.2);
        }
        @media (max-width:800px){
            .map-container{
                flex-direction:column;
            }
            .map-details{
                margin-top:0px;
                width:100%;
                height:40%;
            }
            #map{
                width:100%;
                height:60%;
                margin:0px;
                padding: 0px;
            }
        }
    </style>
</head>
<body>
<div id="map-container" class="map-container">
    <div class="map-details">
        <form action="/view" method="post">
            <h1>Harita</h1>
            <input type="hidden" name="lat" placeholder="lat">
            <input type="hidden" name="lot" placeholder="lot">
            <div>Haritaya tıklayarak koordinatları alabilirsiniz.</div>
            <button type="submit">OLUŞTUR</button>
        </form>
    </div>
    <div id="map"></div>
</div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZnVya2Fubnptbm5uIiwiYSI6ImNsZnNyeXdkdTA5NWczZXBjc3pjbDIxZ28ifQ._9HBjcFn3VCeNS5xmw3B_Q';

    // seçtiğimiz konumun koordinatları otomatik gelsin
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [29.0000, 41.0000],
        zoom: 10
    });

    var marker = new mapboxgl.Marker()
        .setLngLat([29.0000, 41.0000])
        .addTo(map);

    map.on('click', function (e) {
        var coordinates = e.lngLat;
        var lng = coordinates.lng;
        var lat = coordinates.lat;
        console.log('Seçilen koordinatlar: ' + coordinates.lng + ', ' + coordinates.lat);
        marker.setLngLat(coordinates);

        map.flyTo({
            center: [lng, lat],
            essential: true,
            zoom: 15,
            speed: 0.5,
            curve: 1,
            animate: true
        });

        // haritaya bir kez tıklandığında oluştur buttonu ortaya çıksın ve ona tıklandığında verileri gönder
        document.querySelector('button').style.visibility = 'visible';


        document.querySelector('input[name="lat"]').value = lat;
        document.querySelector('input[name="lot"]').value = lng;
    });
</script>

</body>
</html>
