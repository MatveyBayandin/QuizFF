<?php

$connect = mysqli_connect('localhost','root','','QuizFF_BD');

if(!$connect){
    die("не удалость подключиться к базе данных");
}


// $pdo = new PDO('mysql:host=localhost;dbname=QuizFF_BD;charset=utf8', 'root', '', [
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
// ]);


?>