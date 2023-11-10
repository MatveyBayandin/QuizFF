<?php

session_start();
require_once "db.php";
$test = $_SESSION['Test']['TestID'];

$testName = mysqli_query($connect, "SELECT * FROM `Tests` WHERE `id` = '$test'");
$testNamefetch = mysqli_fetch_assoc($testName);
$j = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/normalize.css">
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
                <p>Привет <?= $_SESSION['user']['NameUsr'] ?>!</p>
                <div class="header-UserIcon">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- <form action="" method="post"> -->
        <div class="testContentmag container">
            <p class="prosholtect">Вы прошли тест на</p>
            <h1 class="Big_procent">80%</h1>
            <a href="#" class="ssilka-save">сохранить</a>

        </div>
    <!-- </form> -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/scripts.js"></script>
</body>


</html>