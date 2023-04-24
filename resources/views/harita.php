<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HARİTA</title>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
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
            display: none;
        }
        input, button {
            margin-top: 10px;
            height: 30px;
            width: 200px;
        }
    </style>
</head>
<body>
<div id="map-container">
    <form action="/view" method="post">
        <h1>Harita</h1>
        <input type="hidden" name="lat" placeholder="lat">
        <input type="hidden" name="lot" placeholder="lot">
        <h3>Haritaya tıklayarak koordinatları alabilirsiniz.</h3>
        <button type="submit">OLUŞTUR</button>
    </form>
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
        document.querySelector('button').style.display = 'block';


        document.querySelector('input[name="lat"]').value = lat;
        document.querySelector('input[name="lot"]').value = lng;
    });
</script>

</body>
</html>
