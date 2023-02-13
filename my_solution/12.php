<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<?php
function mypassword($pass_length, $mychar)
{
    $char_length = strlen($mychar);
    $random_pass = '';
    for ($i = 0; $i < $pass_length; $i++) {
        $random_pass .= $mychar[rand(0, $char_length - 1)];
    }
    return $random_pass;
}
$pass_length = readline('Enter password length: ');
$mychar =
    '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()_+-=?:;|,.[]{}<>`~"\/';
$random_pass = mypassword($pass_length, $mychar);
echo 'My random generated password is: ' . $random_pass . "\n";
?>