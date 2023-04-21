<!DOCTYPE html>
<html>
<head>
    <title>Tüm Gönderiler</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0 auto;
            width: 80%;
            max-width: 600px;
        }

        li {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
            margin-bottom: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        li:hover {
            transform: translateY(-5px);
            box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.2);
        }

        li a {
            color: #333333;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        li p {
            color: #666666;
            font-size: 18px;
            margin-top: 10px;
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
        .forum-list li {
            background-color: #f0f7fc;
        }
        .forum-title {
            color: #047aed;
            font-size: 18px;
            font-weight: bold;
        }


    </style>
</head>
<body>
<nav>
    <a href="#" class="logo"></a>
    <a href="/">Anasayfa</a>
    <a href="/contact">İletişim</a>
    <a href="/etkinlik-olustur">Etkinlik Oluştur</a>
    <a href="/forum">Forum Oluştur</a>
</nav>
<div class="forum-list-container">
    <ul class="forum-list">
        <?php foreach ($posts as $post): ?>
        <li>
            <a href="/forum/1">
                <div class="forum-info">
                    <h3 class="forum-title">Forum Başlığı: <?php echo $post->title ?></h3>
                    <span class="forum-details"><?php echo $post->content ?></span>
                </div>
                <div class="forum-stats">
                    <a href="/konu/<?php echo $post->id ?>" class="forum-list">Detay</a>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
