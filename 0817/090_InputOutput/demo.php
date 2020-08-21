<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail {
            color:red;
        }
    </style>
</head>
<body>
<?php
    $scoreList = array(100,98,50,95);

?>
    <ul>
        <?php foreach ($scoreList as $score) {?>
            <?php if ($score >= 60) { ?>
                <li class = "pass"><?=$score?></li>
            <?php } else{ ?>
                <li class = "fail"> <?= $score ?></li>
            <?php } ?>            
        <?php } ?>
    </ul>
<!--  -->

<hr>


    <ul>
        <?php foreach ($scoreList as $score) {?>
            <li class = " <?= (($score < 60 ) ? "fail" : "pass") ?>">
                <?=$score?>
            </li>
        <?php } ?>
    </ul>

    <!-- 再縮短一點 -->


    <ul>
        <?php for($i = 1; $i <= 3; $i++) {?>
            <li>1</li>
        <?php } ?>
    </ul>
    

    <ul>
        <?php for($i = 1; $i <= 3; $i++) {?>
            <li><?= $i ?></li>
        <?php } ?>
    </ul>


    <?php
        for($i = 1; $i <= 3; $i++) {
            echo "<li></li>";
        }
    ?>
</body>
</html>