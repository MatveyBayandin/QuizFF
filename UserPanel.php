<?php
    session_start();
    require "php/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <title>Quiz For Frends</title>
</head>

<body>
    <header class="header">
        <div class="header-content container">
            <div class="header-logo">
                <a href="#">
                    <h2>QuizFF</h2>
                </a>

            </div>
            <div class="header-User">
                <p>Привет <?= $_SESSION['user']['NameUsr']?>!</p>
                <div class="header-UserIcon">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </header>
    <nav class="body-User ">
        <div class="BodyUserSidebar ">
            <div class="BodyUserSidebar-btn ">
                <ul>
                    <li><button class="myTests">Мои тесты</label></li>
                    <li><button class="ConpliteTests">Пройденые тесты</label></li>
                    <li><button class="OtherTests">Тесты других пользователей</label></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="body-User-content container">
        <div class="body-User-content-interface">

           <?php
                // require_once "php/CreateTestPage.php";
           ?>
        </div>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>