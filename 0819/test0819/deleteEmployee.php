<?php

if (!isset($_GET["id"])){
    die("id not found.");
}

$id = $_GET["id"];
if(!is_numeric($id))
  die("id not anumber.");
$sql = <<<multi
  delete from employee where employeeId = $id;
multi;
require("connDB.php");
echo $sql;
mysqli_query($link,$sql);
// $_SESSION["toast"]= "Row";
header("location: index.php");
?>
