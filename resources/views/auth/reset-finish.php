<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
?>
<h1><?=$token2 ?></h1>
    <form action="/updatePassword" method="post">
        <input type="password" name="password" placeholder="Şifre">
        <input type="password" name="password_confirmation" placeholder="Şifre Tekrar">
        <input type="hidden" name="token" value="<?=$token2 ?>">
        <button type="submit">Şifreyi Sıfırla</button>
</body>
</html>
