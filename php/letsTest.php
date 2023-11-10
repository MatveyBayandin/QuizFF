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
            <div class="NameNewTest">
                <h2 class="blabla"><?= $testNamefetch['Namespace']; ?></h1>
            </div>

            <?php
            $testQuestion = mysqli_query($connect, "SELECT * FROM `QuestTests` WHERE `TestID` = '$test'");
            ?>

            <?php foreach ($testQuestion as $tsQues) : ?>

                <?php
                $tsQuesForAns = $tsQues['id'];
                $testAnsQuestion = mysqli_query($connect, "SELECT * FROM `AnswersQuestTests` WHERE `QuestTestID` = '$tsQuesForAns'");
                ?>

                <div class="NewTest-Quest1">
                    <div class="NewTest-Quest1-name">
                        <h3><?= $tsQues['QuestName']; ?></h3>
                    </div>

                    <?php
                    $a = 0;
                    $j++;

                    ?>

                    <div class="Test-Quest1-answers-Flex">

                        <?php foreach ($testAnsQuestion as $TAQ) : ?>

                            <?php
                            $a++;
                            ?>
                            <div class="Test-Quest1-answers">
                                <div class="Test-Quest_answers an1-1">
                                    <input type="radio" name="ans-<?= $j; ?>" value="<?= $TAQ['correctness']; ?>" id="ans-<?= $j; ?>-<?= $a; ?>" class="ans-<?= $j;?>"><label class="label-answer" for="ans-<?= $j; ?>-<?= $a; ?>"><?= $TAQ['AnswerText']; ?></label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>


                </div>
            <?php endforeach; ?>




            <div class="NewTest-buttonSave">
                <input type="submit" class="Save-btn lalalladsdsd" value="Сохранить">
            </div>

        </div>
    <!-- </form> -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/scripts.js"></script>
</body>


</html>