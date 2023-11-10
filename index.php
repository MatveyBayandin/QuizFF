<?php
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
            <div class="header-bnt">
                <button class="open-popub-reg btn2">Регистрация</button>
                <button class="open-popub-log btn1">войти</button>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <div class="content-zagolovok">
                <h1>Quiz for Frends by motya</h1>
            </div>
            <div class="content-image">
                <div class="content-image-box">
                    <img src="img/pngegg.png">
                </div>
            </div>
            <div class="content-text">
                <p>Quiz for Frends. Конструктор тестов для компании друзей созданный гениальным программистом.</p>
            </div>
            <div class="content-button-start">
                <Button>Создать тест</Button>
                
            </div>
        </div>
    </div>

    
    <form action="php/avtor.php" method="POST" id = "LogForm">
        <div class="popub-bg-login">
            <div class="popub">
                <p class="close-popub-LOG">X</p>

                <h2 class="popub-log-h2">вход</h2>
                <p>Имя пользователя</p>
                <input type="text" name="UserNameBD">
                <p>Пароль</p>
                <input type="password" name="UserPasswordBD">
                <div class="popub-log-bnts">
                    <input type="submit" value="Войти" from = "LogForm">
                    <input class="open-popub-reg lalalal" type="submit" value="Регистрация" form="">
                </div>

            </div>
        </div>
    </form>

    <form action="php/registr.php" method="POST" id = "RegForm">
        <div class="popub-bg-register">
            <div class="popub">
                <p class="close-popub-REG">X</p>
                <h2 class="popub-log-h2">Регистрация</h2>
                <p>Имя пользователя</p>
                <input type="text" name="UserName">
                <p>Придумайте пароль</p>
                <input type="password" name="UserPassword">
                <p>Повторите пароль</p>
                <input type="password" name="UserPassword2">
                <div class="popub-log-bnts">
                    <input type="submit" value="Регистрация" from = "RegForm">
                </div>
            </div>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>