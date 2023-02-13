<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
 <?php

$numbers = readline('Enter an array of numbers: ');

$numbers = explode(' ', $numbers);

$sum = 0;

foreach($numbers as $number) {
    $sum += $number;
}

echo $sum;
?>