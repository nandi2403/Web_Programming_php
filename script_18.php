<!-- guess the number -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the random number</title>
</head>

<body>
    <form action="" method="get">
        Guess the number between 1 to 10: <input type="number" name="guess" min="1" max="10" required><br><br>
        <input type="submit" name="submit" value="submit guess">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $randomnumber = rand(1, 10);

        $userguess = $_GET['guess'];

        if ($userguess == $randomnumber) {
            echo "The number you guess is correct: $randomnumber";
        } else {
            echo "The number you guess is incorrect the correct number is $randomnumber";
        }
    }
    ?>
</body>

</html>