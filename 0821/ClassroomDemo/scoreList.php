<?php
    // $scoreList = Array(100,50,90,95);
$scoreList = Array(100,50,90,95);
$viewModel = [];
foreach ($scoreList as $score) {
    $student = (object) ["score" => $score, "style" => "pass"];
    if ($score < 60){
        $student->style = "fail";
    }
    // echo $score;
    // echo $student->score;
    $viewModel[] = $student;
}




    // $scoreList = [ 100,90];
    // $obj = ["firstName" => "Jeremy", "lastName" => "Lin"];
    // echo $obj->lastName;
    // exit();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color:red;
        }
    </style>
</head>
<body>
    <ul>
    <?php foreach ($viewModel as $student) { ?>
        <li class = "<?= $student->style ?>"><?= $student->score ?></li>
    <?php } ?>
</body>
</html>