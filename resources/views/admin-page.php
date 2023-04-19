<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
            font-size: 36px;
            color: #0077b6;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-left: 20px;
        }

        nav li:first-child {
            margin-left: 0;
        }

        nav a {
            text-decoration: none;
            color: #0077b6;
            font-weight: bold;
            font-size: 18px;
        }

        nav a:hover {
            color: #023e8a;
        }

        main {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
        }

        h2 {
            margin-top: 0;
            font-size: 24px;
            color: #0077b6;
            margin-bottom: 20px;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card {
            background-color: #0077b6;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            flex-basis: calc(25% - 10px);
            text-align: center;
        }

        .card h3 {
            margin-top: 0;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card p {
            margin: 0;
            font-size: 36px;
        }

        .table {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead tr {
            background-color: #0077b6;
            color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 12px;
        }

        .pending {
            background-color: #f39c12;
            color: #fff;
        }

        .shipped {
            background-color: #3498db;
            color: #fff;
        }

        .delivered {
            background-color: #2ecc71;
            color: #fff;
        }

        footer {
            margin-top: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
            color: #777;
            font-size: 14px;
        }

    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>Admin Panel</h1>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Dashboard</h2>
        <section class="cards">
            <div class="card">
                <h3>Users</h3>
                <p>5,000</p>
            </div>
            <div class="card">
                <h3>Orders</h3>
                <p>1,000</p>
            </div>
            <div class="card">
                <h3>Revenue</h3>
                <p>$10,000</p>
            </div>
            <div class="card">
                <h3>Products</h3>
                <p>50</p>
            </div>
        </section>

        <section class="table">
            <h3>Bekleyen Etkinlik İstekleri</h3>
            <table>
                <thead>
                <tr>
                    <th>Activity ID</th>
                    <th>Activity name</th>
                    <th>Activity position</th>
                    <th>User Id</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="container">
                            <?php
                            if (empty($activities)) {
                                echo '<a href="/etkinlik-olustur" class="btn btn-primary">Etkinlik Oluştur</a>';
                            }
                            ?>
                            <?php foreach ($activities

                            as $activity): ?>
                            <?php $id = $activity->id; ?>
                            <div class="card">
                                <img src="<?php echo $activity->image_url; ?>" alt="<?php echo $activity->title; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $activity->title; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $activity->date; ?></h6>
                                    <p class="card-text"><?php echo $activity->description; ?></p>
                                    AdminVerifyActiviy <a href="/admin-verify-activity/<?php echo $id; ?>"
                                                          class="btn btn-primary">Onayla</a>
                                    <a href="/admin-delete-activity/<?php echo $id; ?>" class="btn btn-danger">Sil</a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </section>
    </main>
</div>
</body>
</html>
