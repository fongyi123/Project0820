<?php
  $x = 3;
  if ($x >= 10 && foo())
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";
  // &&而且，兩者都要符合，不然就不執行後面
  // 此方法效率高，但後續有可能會有影響後續執行的程式的bug

  $x = 3;
  if ($x >= 10 & foo())
    echo "yes";
  else
    echo "no";
  // &而且，依舊會跑完全部程式，雖然效率較差，但是比較穩健
function foo()
{
   echo "foo() is running.<br>";
}

?>