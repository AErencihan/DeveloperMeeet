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
    </style>
</head>
<body>
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
