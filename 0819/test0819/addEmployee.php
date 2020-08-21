<?php
// $link = mysqli_connect("localhost","root","root","lab0819db",8889);
// mysqli_query($link,"set name utf-8");
// 可以拉出來為副程式
if (isset($_POST["okbtn"])){
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$cityId = $_POST["cityId"];
$sql = <<<multi
  insert into employee(firstName,lastName,cityId) 
  values ('$firstName', '$lastName', $cityId);

multi;
echo $sql;
require("connDB.php");
mysqli_query($link,$sql);
// $_SESSION["toast"]= "Row";
header("location: index.php");
}

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

<form method = "post">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Fist Name :</label> 
    <div class="col-8">
      <input id="text" name="firstName" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Last Name :</label> 
    <div class="col-8">
      <input id="text1" name="lastName" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">city</label> 
    <div class="col-8">
      <select id="select" name="cityId" class="custom-select">
        <option value="2">TaiPei</option>
        <option value="4">TaiChung</option>
        <option value="6">TaiNan</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="okbtn" vlue= "OK" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</body>
</html>


