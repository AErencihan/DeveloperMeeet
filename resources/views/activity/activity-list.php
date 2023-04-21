<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ETKİNLİKLER LİSTESİ</title>
    <style>
        body {
            background-color: #f8f8f8;
            font-family: sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background-color: #ffffff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 10px;
            width: 30%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            margin: 0;
        }

        .card-subtitle {
            font-size: 16px;
            color: #999;
            margin: 5px 0 10px 0;
        }

        .card-text {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .card-link {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
            margin-right: 10px;
        }

        .card-link:hover {
            text-decoration: underline;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #0077be; /*Açık mavi ton*/
            overflow: hidden;
        }

        nav a {
            color: #fff; /*Beyaz*/
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px;
            float: left;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #006aae; /*Daha koyu bir mavi ton*/
        }

        nav .logo {
            float: left;
            padding: 8px;
            margin-left: 20px;
            margin-right: 20px;
            height: 50px;
            width: 50px;
            background-color: #fff; /*Beyaz*/
            border-radius: 50%;
        }

        nav .menu {
            float: right;
        }

        nav .menu a {
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            nav a, nav .menu {
                float: none;
                display: block;
                text-align: left;
            }

            nav .logo {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
<nav>
    <a href="/">Anasayfa</a>
    <a href="/konular">konular</a>
    <div class="menu">
        <a href="/etkinlik-olustur">Etkinlik Oluştur</a>
        <a href="/profile">Profil</a>
        <a href="/signout">Çıkış</a>
    </div>
</nav>
<h1 style="text-align:center;">ETKİNLİKLER LİSTESİ</h1>
<div class="container">

    <?php
    // eğer liste boşssa
    if (empty($activities)) {
        // eğer etkinlik yoksa ektinlik oluştur butonu göster
        echo '<a href="/etkinlik-olustur" class="btn btn-primary">Etkinlik Oluştur</a>';
    }
    ?>

    <?php foreach ($activities as $activity): ?>
        <?php $id = $activity->id; ?>
        <div class="card">
            <img src="<?php echo $activity->image_url; ?>" alt="<?php echo $activity->title; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $activity->title; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $activity->date; ?></h6>
                <p class="card-text"><?php echo $activity->description; ?></p>
                <a href="/detail/<?php echo $id ?>" class="card-link">Daha Fazla Bilgi</a>
                <a href="/etkinlige-katıl/<?php echo $id ?>" class="card-link">Katıl</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
