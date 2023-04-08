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
    </style>
</head>
<body>
<h1 style="text-align:center;">ETKİNLİKLER LİSTESİ</h1>
<div class="container">
    <?php foreach ($activities as $activity): ?>
        <?php $id = $activity->id; ?>

        <div class="card">
            <img src="<?php echo $activity->image_url; ?>" alt="<?php echo $activity->title; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $activity->title; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $activity->date; ?></h6>
                <p class="card-text"><?php echo $activity->description; ?></p>
                <a href="/detail/<?php echo $id ?>" class="card-link">Daha Fazla Bilgi</a>
                <a href="#" class="card-link">Katıl</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
