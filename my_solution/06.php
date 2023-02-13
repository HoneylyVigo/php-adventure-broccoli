<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
 
 
<?php

$n =  readline("Enter number: ");
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
  $sum += $i;
  echo $sum . "\n";
}

?>