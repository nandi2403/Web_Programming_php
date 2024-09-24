<!-- find vowel  -->

<?php
$line = "Hello world";

$vowelCount = 0;

for ($i = 0; $i < strlen($line); $i++) {
    if (
        strtolower($line[$i]) == 'a' ||
        strtolower($line[$i]) == 'e' ||
        strtolower($line[$i]) == 'i' ||
        strtolower($line[$i]) == 'o' ||
        strtolower(($line[$i])) == 'u'
    ) {

        $vowelCount++;
    }
}

echo "The number of vowels in the sentence is: $vowelCount";

?>