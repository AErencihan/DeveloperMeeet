<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ETKİNLİK DETAYLARI</title>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>

    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .card {
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .card-image {
            width: 100%;
            height: 300px;
            background-repeat: no-repeat;
            background-size: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h1 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .card-content p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .card-content ul {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .card-content ul li {
            margin-bottom: 5px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #3e8e41;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <?php $id = $activity->title; ?>
        <?php $primaryKey = $activity->id; ?>
        <?php $imgae_url = $activity->image_url; ?>
        <?php $description = $activity->description; ?>
        <?php $date = $activity->date; ?>
        <?php $lat = $activity->lat; ?>
        <?php $lot = $activity->lot; ?>

        <h1>
            <?php echo $id; ?>
        </h1>
        <div class="card-image" style="background-image: url(<?php echo $imgae_url; ?>)"></div>
        <div class="card-content">
            <ul>
                <li>
                    <strong>Activity Description: </strong>
                        <?php echo $description; ?>

                </li>
                <li><strong>Tarih:</strong>
                    <?php echo $date; ?>
                </li>

                <li><strong>Konumun haritada gösterimi</strong>
                    <div id="map" style="width: 100%; height: 300px;"></div>
                </li>
            </ul>

            <a href="/etkinlige-katıl/<?php echo $primaryKey ?>" class="button">Etkinliğe Katıl</a>
        </div>
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
</script>

</body>
</html>
