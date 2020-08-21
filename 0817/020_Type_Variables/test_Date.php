<?php
  $x = getdate();
  // var dump($x);
  //getdate()得到一個陣列;

  echo gettype($x), "<br>";
  
  $x = date('Y-m-d H:i:s');
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
  $x = gmdate('Y-m-d H:i:s');
  echo $x, "<br>";
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
?>