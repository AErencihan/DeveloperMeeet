<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Developer Meet</title>

    <style>

        html, body {
            height: 100%;
        }

        body {
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #title {
            color: #fff;
            font-size: 72px;
            opacity: 0;
            transition: all 1s;
        }

        #button {
            margin-top: 50px;
            padding: 15px 30px;
            font-size: 24px;
            background-color: #fff;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        nav {
            display: flex;
            justify-content: flex-end;
            width: auto;
            padding: 20px;
            background-color: #1E1E1E;
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
    </style>
</head>
<body>

<nav>
    <a href="/konular">Forum</a>
    <a href="/contact">İletişim</a>
    <a href="/profile">Hesabım</a>
</nav>

<div id="container">
    <h1 id="title">Developer Meet</h1>
    <button href="/etkinlikler" id="button">Haydi Başlayalım - Etinliklere Git</button>
</div>
<img src="https://i.hizliresim.com/17c1h8f.jpg" alt="Resim">
<script>
    const title = document.getElementById("title");
    const button = document.getElementById("button");

    let opacity = 0;
    let intervalID = setInterval(() => {
        opacity += 0.05;
        title.style.opacity = opacity;
        title.style.transform = "translateX(-" + (1 - opacity) * 100 + "px)";
        if (opacity >= 1) clearInterval(intervalID);
    }, 50);

    // maouse butona geldiğinde butonun rengini değiştir
    button.addEventListener("mouseover", () => {
        button.style.backgroundColor = "#0e1133";
        button.style.color = "#fff";
    });

    // mouse butondan ayrıldığında butonun rengini değiştir
    button.addEventListener("mouseout", () => {
        button.style.backgroundColor = "#fff";
        button.style.color = "#000";
    });


    button.addEventListener("click", () => {
        window.location.href = "/etkinlikler";
    });


</script>

</body>
</html>
