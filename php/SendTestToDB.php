<?php
session_start();
require_once "db.php";


$userID = $_SESSION['user']['UserID'];
$TestName = $_POST['TestName'];
$testNameBool = true;

$NameTestBD = mysqli_query($connect,"SELECT * FROM `Tests` WHERE `UserID` = '$userID'");

foreach($NameTestBD as $TestBD){
    if($TestName == $TestBD['Namespace']){
        $testNameBool = !$testNameBool;
        echo " данное имя уже используется ";
        break;
    }
}

if($testNameBool == false){
    echo 'ошибка'; 
}
else{
    echo 'не ошибка';

    mysqli_query($connect,"INSERT INTO `Tests`(`Namespace`, `UserID`) VALUES ('$TestName','$userID')");
    $IDQuestBD = mysqli_query($connect,"SELECT `id` FROM `Tests` WHERE `Namespace` = '$TestName' AND `UserID` = '$userID'");
    $IDQuestBD = mysqli_fetch_assoc($IDQuestBD);
    $TestID = $IDQuestBD['id'];


    for($i = 1;$i<6;$i++){
        $QuestName = $_POST['QuestName-'.$i];

        
        $NameQuestBD = mysqli_query($connect,"SELECT * FROM `QuestTests` WHERE `TestID` = '$TestID'");
        $QuestNameBool = true;

        foreach($NameQuestBD as $QuestBD){
            if($QuestName == $QuestBD['QuestName']){
                $QuestNameBool = !$QuestNameBool;
                echo "данный вопрос уже имеется";
            }
        }


        if($QuestNameBool === false){
            echo 'ошибка';
        }
        else{
            mysqli_query($connect,"INSERT INTO `QuestTests`(`TestID`, `QuestName`) VALUES ('$TestID','$QuestName')");
            $NameQuestBD = mysqli_query($connect,"SELECT `id` FROM `QuestTests` WHERE `QuestName` = '$QuestName'");
            $NameQuestBD = mysqli_fetch_assoc($NameQuestBD);

            $AnsRadio = $_POST['ans-'.$i];

                $ansver1 = $_POST['ans-'.$i.'-1'];
                $ansver2 = $_POST['ans-'.$i.'-2'];
                $ansver3 = $_POST['ans-'.$i.'-3'];
                $ansver4 = $_POST['ans-'.$i.'-4'];
        
                $AnsversArr = array(' ',$ansver1,$ansver2,$ansver3,$ansver4);
                
                for($l = 1;$l<5;$l++){
        
                    if($AnsRadio == $l){
                        $NameQuestInsert = $NameQuestBD['id'];
                        $ansverName = $AnsversArr[$l];
                        mysqli_query($connect,"INSERT INTO `AnswersQuestTests`(`QuestTestID`, `AnswerText`, `correctness`) VALUES ('$NameQuestInsert','$ansverName','1')");
                           
                                
                    }
                    else{
                        $NameQuestInsert = $NameQuestBD['id'];
                        $ansverName = $AnsversArr[$l];
                        mysqli_query($connect,"INSERT INTO `AnswersQuestTests`(`QuestTestID`, `AnswerText`, `correctness`) VALUES ('$NameQuestInsert','$ansverName','0')"); 
                    }
        
                }
        
                
            

        }
    
    
        
    
    }

    header("Location: ../UserPanel.php");

}









// $QuestName1 = $_POST['QuestName-1'];
// $QuestName2 = $_POST['QuestName-2'];
// $QuestName3 = $_POST['QuestName-3'];
// $QuestName4 = $_POST['QuestName-4'];
// $QuestName5 = $_POST['QuestName-5'];

// $ansver11 = $_POST['ans-1-1'];
// $ansver12 = $_POST['ans-1-2'];
// $ansver13 = $_POST['ans-1-3'];
// $ansver14 = $_POST['ans-1-4'];
// $ansver21 = $_POST['ans-2-1'];
// $ansver22 = $_POST['ans-2-2'];
// $ansver23 = $_POST['ans-2-3'];
// $ansver24 = $_POST['ans-2-4'];
// $ansver31 = $_POST['ans-3-1'];
// $ansver32 = $_POST['ans-3-2'];
// $ansver33 = $_POST['ans-3-3'];
// $ansver34 = $_POST['ans-3-4'];
// $ansver41 = $_POST['ans-4-1'];
// $ansver42 = $_POST['ans-4-2'];
// $ansver43 = $_POST['ans-4-3'];
// $ansver44 = $_POST['ans-4-4'];
// $ansver51 = $_POST['ans-5-1'];
// $ansver52 = $_POST['ans-5-2'];
// $ansver53 = $_POST['ans-5-3'];
// $ansver54 = $_POST['ans-5-4'];

// $AnsRadio1 = $_POST['ans-1'];
// $AnsRadio2 = $_POST['ans-2'];
// $AnsRadio3 = $_POST['ans-3'];
// $AnsRadio4 = $_POST['ans-4'];
// $AnsRadio5 = $_POST['ans-5'];

?>