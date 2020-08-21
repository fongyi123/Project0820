<?php
// $link = mysqli_connect("localhost","root","root","lab0819db",8889);
// mysqli_query($link,"set name utf-8");
require("connDB.php");
$sqlStatement = <<< multi
    select employeeId, firstName,lastName, e.cityId, cityName 
        from city c join employee e on e.cityId = c.cityId
    multi;
// "select * from employee";
$result = mysqli_query($link, $sqlStatement);

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

<div class="container">
  
<h2>Employee List
    
        <a href="addEmployee.php" class="btn btn-outline-info btn-md float-right">New</a>
  </h2>

  <table class="table">
    <thead>

      <tr class="info">
        <th >Firstname</th>
        <th>Lastname</th>
        <th>city</th>
        <td></td>
        <th></th>

      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($result)): ?>    
      <tr class="success">
        <td><?= $row["firstName"] ?></td>
        <td><?= $row["lastName"] ?></td>
        <td><?= $row["cityName"] ?></td>
        <td class = "float-right">
            <span>
                <a href="./editForm.php?id=<?= $row["employeeId"] ?>"class= "btn btn-success btn-sm" class = "float-right">Edit</a>
                |
                <!-- btn-outline-success -->
                <a href="./deleteEmployee.php?id=<?= $row["employeeId"] ?>" class="btn btn-danger btn-sm">Delete</a>
            </span>
        </td>
      </tr>
      <?php endwhile ?>
      
    </tbody>
  </table>
</div>

</body>
</html>


