<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php
$mynumbers = readline("Enter a array of numbers: ");
$numbers = explode(' ', $mynumbers);
$sum = 0;

foreach($numbers as $arrnum){
  $sum += $arrnum;
}

$numlength = count($numbers);
$avg = $sum / $numlength;
echo "The average of the number in array is: ".$avg."\n";
?>