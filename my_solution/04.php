<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
 <?php
$num = readline('Enter a Number: ');
$sum = 0;

while($num > 0){
    $digit = $num % 10;
    $sum += $digit;
    $num = (int)($num / 10);
}
echo "Sum of digits is $sum.";
?>