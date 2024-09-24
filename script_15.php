<!-- find the larger from 3 digit -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the largest number</title>
</head>

<body>

    <form action="" method="get">
        Enter first number: <input type="number" name="num1" required><br />
        <br>
        Enter second number: <input type="number" name="num2" required><br />
        <br>
        Enter third number: <input type="number" name="num3" required><br />
        <input type="submit" style="margin-top: 10px; font-size: larger;" name="submit" value="find largest">

    </form>

    <?php
    if (isset($_GET['submit'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];

        $largest = max($num1, $num2, $num3);

        echo "The largest number of the three number is: $largest";
    }
    ?>
</body>

</html>