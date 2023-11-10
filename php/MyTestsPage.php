<?php

    session_start();
    require_once "db.php";
    $UserNameid = $_SESSION['user']['UserID'];
    $UserTestName = mysqli_query($connect,"SELECT * FROM `Tests` WHERE `UserID` = '$UserNameid'");

?>

<div class="body-User-content-interface-create">
    <input type="button" value="создать тетст" class="create-button">
</div>
<div class="body-User-content-interface-tests">

    <?php foreach($UserTestName as $usNam):?>

        <div class="body-User-content-interface-tests-name">
            <input class="TestName-radiobutton" type="radio" name="RadTestnam" id="TestName-radio-<?=$usNam['id'];?>" ><label for="TestName-radio-<?=$usNam['id'];?>" class="TestName-button"><?=$usNam['Namespace'];?></label>
        </div>
    <?php endforeach; ?>                        


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="scripts/main.js"></script>