<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php 
$string = readline('Enter the Characters: '); 
$freq = array(); 

for ($i = 0; $i < strlen($string); $i++) { 
    $char = $string[$i]; 
    if (isset($freq[$char])) { 
        $freq[$char]++; 
    } else { 
        $freq[$char] = 1; 
    } 
} 

foreach ($freq as $char => $count) { 
    echo "$char: $count \n"; 
} 
?>