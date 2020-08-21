<?php

if (!isset($_GET["id"])){
    die("id not found.");
}

$id = $_GET["id"];
if(!is_numeric($id))
die("id not anumber.");

require("connDB.php");
if (isset($_POST["okbtn"])){
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $cityId = $_POST["cityId"];
  $sql = <<<multi
    update employee set
    firstName='$firstName',
    lastName='$lastName',
    cityId=$cityId
    where employeeId = $id
    multi;
    mysqli_query($link,$sql);
    header("location: index.php");
    exit();
}
else{
  $sql = <<<multi
    select * from employee
    where employeeId = $id;
    multi;
  $result = mysqli_query($link,$sql);
  $row =mysqli_fetch_assoc($result);
}

// header("location: index.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method = "post" >
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Fist Name :</label> 
    <div class="col-8">
      <input id="firstName" name="firstName" value="<?= $row["firstName"] ?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Last Name :</label> 
    <div class="col-8">
      <input id="lastName" name="lastName" value="<?= $row["firstName"] ?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="cityId" class="col-4 col-form-label">city</label> 
    <div class="col-8">
      <select id="cityId" name="cityId" class="custom-select">
        <option name="cityId" id="cityId_0" value="2"
        <?=  ($row["cityId"] == 2) ? "selected" :  "" ?>>TaiPei</option>
        <option name="cityId" id="cityId_1" value="4"
        <?=  ($row["cityId"] == 4) ? "selected" :  "" ?>>TaiChung</option>
        <option name="cityId" id="cityId_2" value="6"
        <?=  ($row["cityId"] == 6) ? "selected" :  "" ?>>TaiNan</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="okbtn" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

</body>
</html>

</body>
</html>


