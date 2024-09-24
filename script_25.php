<!-- swap of 2 nos -->

<?php
$num1 = 10;
$num2 = 12;

echo "Before swapping: num1 = $num1, num2 = $num2<br>";

$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;
echo "After swapping: num1 = $num1, num2 = $num2";
?>