<?php

session_start();
require_once "db.php";

$testID = $_POST['RadTestnam'];


$_SESSION['Test'] = [
    "TestID" => $testID,
];

header("Location: letsTest.php");

?>