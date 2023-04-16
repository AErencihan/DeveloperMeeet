<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Şifremi Sıfırla</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
        }

        h1 {
            margin-bottom: 2rem;
            font-size: 2rem;
            text-align: center;
        }

        input[type="password"] {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 0.5rem;
            background-color: #f5f5f5;
            font-size: 1rem;
        }

        button[type="submit"] {
            padding: 1rem;
            border: none;
            border-radius: 0.5rem;
            background-color: #0077ff;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #005ae6;
        }
    </style>
</head>
<body>
<form action="/updatePassword" method="post">
    <h1>Şifremi Sıfırla</h1>
    <input type="password" name="password" placeholder="Yeni Şifre">
    <input type="password" name="password_confirmation" placeholder="Yeni Şifre Tekrar">
    <input type="hidden" name="token" value="<?=$token2 ?>">
    <button type="submit">Şifreyi Sıfırla</button>
</form>
</body>
</html>
