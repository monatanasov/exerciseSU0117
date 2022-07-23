<?php
    // Check if a number is Odd or Even
    if ($_POST) {
        // Strip whitespaces
        $inputNumber = trim($_POST['inputNumber']);
        // Replace commas with dots if wrong separator is used
        $inputNumber = str_replace(",",".","$inputNumber");

        // Check if variable is a number or numeric string and for positiveness
        if (is_numeric($inputNumber) && $inputNumber >= 0) {
            // if the var is positive use FLOOR to round fractions down
            $inputNumber = floor ($inputNumber);

            if ($inputNumber % 2 == 0) {
                echo 'your number ' . $inputNumber . ' is EVEN';
            } else {
                echo 'your number ' . $inputNumber . ' is ODD';
            }
            // Check if variable is a number ... and for negativeness
        } else if (is_numeric($inputNumber) && $inputNumber <= 0) {
            // if the var is negative use CEIL to round fractions UP
            $inputNumber = ceil ($inputNumber);

            if ($inputNumber % 2 == 0) {
                echo 'your number ' . $inputNumber . ' is EVEN';
            } else {
                echo 'your number ' . $inputNumber . ' is ODD';
            }
        } else {
            echo '<b><h2>'.'Only integers are allowed '.'</b></h2>';
        }
    } else {
        echo '<b><h2>'.'You have to fill the textbox with a number first'.'</b></h2>';
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>oddOrEven</title>
    </head>
    <body>
        <form action="oddEven.php" method="post">
            <label for="inputNumber">enter your number:</label>
            <input type="text" id="inputNumber" name="inputNumber"><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>

