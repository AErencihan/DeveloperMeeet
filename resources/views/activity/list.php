<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etkinlikler</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            overflow: hidden;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        header h1 {
            float: left;
        }

        header nav {
            float: right;
        }

        header nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        header nav ul li {
            display: inline-block;
            margin-left: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 14px;
        }

        main {
            padding: 20px;
        }

        main h2 {
            margin-top: 0;
        }

        .event-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .event {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            display: inline;
            margin: 0 10px;
            vertical-align: top;
            width: calc(33.33% - 20px);
            box-sizing: border-box;
        }

        .event-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .event-image img {
            width: 100%;
            height: auto;
        }

        .event-details {
            margin-top: 20px;
        }

        .event-details h3 {
            margin-top: 0;
        }

        .event-details p {
            margin: 0;
        }

        .event-details .event-link {
            display: inline-block;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .event {
                width: calc(50% - 20px); /* setting width for 2 events in a row */
            }
        }

        @media (max-width: 480px) {
            .event {
                width: 100%; /* setting width for 1 event in a row */
                margin: 0 0 20px; /* adding margin bottom to separate events vertically */
            }



    </style>
</head>
<body>
<header>
    <div class="container">
        <h1>Etkinlikler</h1>
        <nav>
            <ul>
                <li><a href="#">Ana Sayfa</a></li>
                <li><a href="#">Etkinlikler</a></li>
                <li><a href="#">Hakkımızda</a></li>
                <li><a href="#">İletişim</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
        <div class="container">
        <h2>Güncel Etkinlikler</h2>
            <?php foreach ($activities as $activity): ?>
        <div class="event-list">
            <div class="event">
                <div class="event-image">
                    <img src="https://via.placeholder.com/300x200.png?text=Etkinlik+Resmi" alt="Etkinlik Resmi">
                </div>
                <div class="event-details">
                    <h3><?php echo $activity->title ?></h3>
                    <p class="event-date">Tarih: <?php echo $activity->date ?> </p>
                    <p class="event-location">Yer: Ankara</p>
                    <p class="event-description"><?php echo $activity->description ?></p>
                    <a href="/detail/<?php echo $activity->id ?>" class="event-link">Detaylar</a>
                </div>
            </div>
        </div>
            <?php endforeach; ?>

        </div>
</main>

<footer>
    <div class="container">
        <p>© 2020 Etkinlikler</p>
    </div>
</footer>
</body>
</html>
