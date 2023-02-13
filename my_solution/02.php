<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php 
$string = readline('Enter a words: '); 

$string_length = strlen($string); 

$string_start = 0; 
$string_end = $string_length - 1; 

$isPalindrome = true; 

while ($string_start < $string_end) { 
    if ($string[$string_start] != $string[$string_end]) { 
        $isPalindrome = false; 
        break; 
    } 
    $string_start++; 
    $string_end--; 
} 

if ($isPalindrome) { 
    echo "The word is a palindrome."; 
} else { 
    echo "The word is not a palindrome."; 
} 

?>