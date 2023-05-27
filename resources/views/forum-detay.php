<!DOCTYPE html>
<html>
<head>
    <title><?= $post->title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap');
        body {
            margin:0px;
            padding:0px;
            background-color: #dfe4ea;
            height: 100vh;
        }
        .baslik {
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
      

        h1 {
            font-size: 20px;
            font-weight: bold;
            text-align: left;
            margin-top: 30px;
        }

        /*Eray Header Başlangıç */
        header{
            width:100%;
            height: 70px;
            /* box-shadow: 3px 3px 40px rgba(0,0,0,.2); */
            display:flex;
            justify-content: space-around;
            align-items: center;
            list-style-type: none;
            position: relative;
        }
        header > span{
            font-family: 16px;
            font-family: "ASAP";
        }
        header > nav > ul > li{
            display: inline-block;
            margin-right:5px;
            
        }
        header > nav > ul > li:last-child{
            background-color: #bdc3c7;
            padding:6px 7px;
            border-radius: 150px;
            box-shadow: 1px 2px 7px rgba(0,0,0,0.1);
            cursor:pointer;
        }
        header > nav > ul > li:last-child > a{
            font-size:13px;
        }
        header > nav > ul > li > a{
            text-decoration: none;
            font-size:13px;
            color: #4b4b4b;
            font-family: "ASAP";
        }
        /*Hamburger Menu*/
        .hamburger-menu{
            display:none;
            border: none;
            outline: none;
            background:none;
            cursor: pointer;
            font-size:22px;
        }
        /*nav2*/
        .nav2{
            display: none;
            width:100%;
            height: 300px;
            background-color: #dfe4ea;
            box-shadow: 5px 5px 5px rgba(0,0,0,.3);
            position: absolute;
            top:70px;
        }
        .nav2 > ul > li{
            display: block;
            text-align: center;
            margin-bottom:25px;
            
        }
        .nav2 > ul > li:last-child{
            background-color: #bdc3c7;
            padding:6px 7px;
            border-radius: 150px;
            box-shadow: 1px 2px 7px rgba(0,0,0,0.1);
            cursor:pointer;
        }
        .nav2 > ul > li:last-child > a{
            font-size:13px;
        }
        .nav2 > ul > li > a{
            text-decoration: none;
            font-size:13px;
            color: #4b4b4b;
            font-family: "ASAP";
        }

        /* Responsive */
        @media (max-width:800px){
            nav{
                display: none;
            }
            .hamburger-menu{
                display: block;
            }
            .nav2{
                display: none;
            }

        }
        @media (min-width:800px) {
            .nav2{
                display: none !important;
            }
        }
    </style>
</head>
<body>
<!--Eray Header Başlangıç-->
<header>
    <span>Developer <b>Meet</b></span>
    <nav>
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/konular">Forum</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/profile">Hesabım</a></li>
        </ul>
    </nav>
    <button class="hamburger-menu" id="hamb-menu"><i class="fa-solid fa-bars"></i></button>
    <div class="nav2" id="navMenu2">
        <ul>
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/konular">Forum</a></li>
            <li><a href="/contact">İletişim</a></li>
            <li><a href="/profile">Hesabım</a></li>
        </ul>
    </div>
</header>
<!--Eray Header Bitiş-->
<div class="baslik">
    <h1><?= $post->title ?></h1>
</div>
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

<script>
    const hamburgerButton = document.getElementById("hamb-menu");

    hamburgerButton.addEventListener("click", () => {
           let navMenu = document.getElementById("navMenu2");
           if(navMenu.style.display == "block"){
            navMenu.style.display = "none";
           }
           else{
            navMenu.style.display = "block";
           }
    });
</script>
</body>
</html>
