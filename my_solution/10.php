<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->

 <?php

function getMedian($arr, $n)
{
    sort($arr);

    if ($n % 2 == 0) {
        return ($arr[($n - 1) / 2] + $arr[$n / 2]) / 2;
    }

    return $arr[$n / 2];
}
echo 'Enter the array of numbers: ';
$arr = trim(fgets(STDIN));
$arr = explode(' ', $arr);
$n = count($arr);

echo 'Median of the array is ' . getMedian($arr, $n);

?>