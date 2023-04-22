<!DOCTYPE html>
<html>
<head>
    <title>Kullanıcı Profili</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
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
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #120a36;
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
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #120a36;
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
    <a href="#" class="logo"></a>
    <a href="/">Anasayfa</a>
    <a href="/contact">İletişim</a>
</nav>
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
</body>
</html>
