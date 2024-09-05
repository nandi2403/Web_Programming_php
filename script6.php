<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML Example</title>
</head>
<body>

<?php
    $title = "PHP and HTML";
    $name = "Nandini";
    $message = "This text is bold and italic.";
	 $message = "welcome to ATMIYA UNIVERSITY.";
?>

<!-- Heading -->
<h1><?php echo $title; ?></h1>

<!-- Using Bold and Italic -->
<h2><?php echo "<b>Welcome, $name!</b>"; ?></h2>
<p><?php echo "<i>$message</i>"; ?></p>

</body>
</html>
