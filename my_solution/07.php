<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
 <?php
$input = readline("Enter a list of Strings: ");
$input_array = explode(" ", $input);
$max_length = 0;
$longest_string = "";

foreach ($input_array as $str) {
    if (strlen($str) > $max_length) {
        $longest_string = $str;
        $max_length = strlen($str);
    }
}

echo "The longest String is: $longest_string";
?>