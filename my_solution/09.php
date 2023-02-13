<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
 <?php
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$mystring = readline('Enter some words: ');
$new_string = str_replace($vowels, '', $mystring);
echo ' The new words is: ' . $new_string . "\n";

?>