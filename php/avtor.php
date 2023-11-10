<?php
    session_start();
    require_once "db.php";

    $name = $_POST['UserNameBD'];
    $Password = $_POST['UserPasswordBD'];

    $NameFromBD = mysqli_query($connect, "SELECT * FROM Users WHERE `name` = '$name' AND `password` = '$Password'");

    if(mysqli_num_rows($NameFromBD) > 0){

        $user = mysqli_fetch_assoc($NameFromBD);
        
        $_SESSION['user'] = [
            "UserID" => $user['id'],
            "NameUsr" => $user['name']
        ];

        header("Location: ../UserPanel.php");
    }
    else{
        die('gfitk yf [eq');
    }
?>