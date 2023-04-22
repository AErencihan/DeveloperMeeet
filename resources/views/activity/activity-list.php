<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Sofia', sans-serif;
        }
        h2 {
            color: #0a4870;
            font-weight: 500;
        }
        ul {
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

        nav {
            background-color: #120a36;
            overflow: hidden;
            position: static;
            top: 0;
            width: 100%;
        }

        nav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>

<nav>
    <a href="/konular">Forum</a>
    <a href="/contact">İletişim</a>
    <a href="/profile">Hesabım</a>
</nav>
<h1>Mevcut Etkinlikler</h1>
<ul>
    <?php foreach ($activities as $activity): ?>
    <li id="<?php echo $activity->id ?>" class="booking-card" style="background-image: url(<?php echo $activity->image_url ?>)">
        <div class="book-container">
            <div class="content">
                <button class="btn">Detay</button>
            </div>
        </div>
        <div class="informations-container">
            <h2 class="title"><?php echo $activity->title ?></h2>
            <p class="sub-title"><?php echo $activity->description ?></p>
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

</script>
</body>
</html>
