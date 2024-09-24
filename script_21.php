<!-- palindrome number => is a number,word or phrase which can be seen same in reverse -->

<?php
$number = 121;

$reverseNumber = strrev($number);

if ($number == $reverseNumber) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}
