<!-- find factorial -->

<?php

$num = 12;
$factorial = 1;

for ($x = $num; $x >= 1; $i--) {
    $factorial = $factorial * $x;
}
echo "Factorial of $num is $factorial";
?>