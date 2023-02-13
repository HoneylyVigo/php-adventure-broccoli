<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->
<?php
$char = readline("Enter a character: ");
if (strpos('aeiouAEIOU', $char) !== false)
{
    echo "$char is a Vowel.\n";
}
else{
    echo "$char is a Consonant\n";
}

?>