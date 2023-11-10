
<?php

    session_start();
    require_once "db.php";
    $UserNameid = $_SESSION['user']['UserID'];
    $UserTestName = mysqli_query($connect,"SELECT * FROM `Tests`");

?>

<div class="body-User-content-interface-tests">
    <form action="php/ProoitiTest.php" method="POST" id = "OpenSoglasieTest">

        <?php foreach($UserTestName as $usNam):?>

            <?php $autorTestid = $usNam['UserID'];
                $autorTest = mysqli_query($connect,"SELECT * FROM `Users` WHERE `id` = $autorTestid"); 
                $autorTest = mysqli_fetch_assoc($autorTest);
                ?>

            <div class="body-User-content-interface-tests-name">
                <input class="TestName-radiobutton" type="radio" name="RadTestnam" id="TestName-radio-<?=$usNam['id'];?>"  value="<?=$usNam['id'];?>">
                <label for="TestName-radio-<?=$usNam['id'];?>" class="TestName-button"><?=$usNam['Namespace'];?>

                    <div class="body-User-content-interface-tests-autor">
                        <p>by. <?=$autorTest['name'] ?></p>
                    </div>
                </label>
                
            </div>
        <?php endforeach; ?>              

              
        <div class="popub-bg-Soglasie">
            <div class="popub">
                <h2 class="popub-log-h2">Хотите пройти тест?</h2>
                <div class="popub-log-bnts">
                    <input type="submit" value="да!" from = "OpenSoglasieTest">
                    <input type="submit" value="отмена" form="" class="close-popub-Sogl">
                </div>
            </div>
        </div>
    </form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="scripts/main.js"></script>