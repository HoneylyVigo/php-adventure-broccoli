<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->
 <?php
$sentence = readline('Enter the sentence: ');
$words = str_word_count($sentence);

echo "The number of words in a sentence are: ".$words."\n";
?>