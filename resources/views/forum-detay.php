<!DOCTYPE html>
<html>
<head>
    <title><?= $post->title ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }
        h1 {
            margin-top: 0;
        }
        .content {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .comments {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .comments h2 {
            margin-top: 0;
        }
        form {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        nav {
            display: flex;
            justify-content: flex-end;
            width: auto;
            padding: 10px;
            background-color: #1f1f3b;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1;

        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        h1 {
            font-size: 20px;
            font-weight: bold;
            text-align: left;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<nav>
    <a href="/konular">Forum</a>
    <a href="/contact">İletişim</a>
    <a href="/profile">Hesabım</a>
</nav>
<header>
    <h1><?= $post->title ?></h1>
</header>
<div class="content">
    <p><?= $post->content ?></p>
</div>
<div class="comments">
    <h2>Yorumlar</h2>
    <?php foreach ($comments as $comment): ?>
        <p><?= $comment->content ?></p>
        <p><small><?= $comment->created_at ?></small></p>
    <?php endforeach; ?>
    <form method="post" action="/yorum-olustur/<?= $post->id ?>">
        <h3>Yorum Ekle</h3>
        <label for="content">Yorumunuz</label>
        <textarea id="content" name="content"></textarea>
        <input type="submit" value="Gönder">
    </form>
</div>
</body>
</html>
