<?php
require_once "db.php";

$name = $_POST['UserName'];
$Password = $_POST['UserPassword'];
$Password2 = $_POST['UserPassword2'];
$nameBool = true;

$NameFromBD = mysqli_query($connect,"SELECT `name` FROM `Users`");

foreach($NameFromBD as $NamBD){
    if($name == $NamBD['name']){
        $nameBool = false;
        echo "данное имя уже используется";
    }
}

if( $nameBool == true && $Password == $Password2){
    mysqli_query($connect,"INSERT INTO Users(`name`, `password`) VALUES ('$name','$Password')");
    
}
else{
    echo "пароли не совпадают";
}

header("Location: ../index.php");

?>