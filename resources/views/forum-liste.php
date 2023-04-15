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
    </style>
</head>
<body>
<h1>Tüm Gönderiler</h1>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <a href="/konu/<?= $post->id ?>"><?= $post->title ?></a>
            <p><?= $post->content ?></p>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
