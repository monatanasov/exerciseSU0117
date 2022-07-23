<?php
    // TASK: Check if a number is Odd or Even or Invalid using FMOD
    if ($_POST) {
        $inputNumber = trim($_POST['inputNumber']);
        // Remainder
        $rem = fmod($inputNumber,2);
        if ($rem == 0) {
            echo "even";
        } // else if ($rem == round($rem)) {
            else if ($rem == 1) {
            echo "odd";
        } else {
            echo "invalid";
        }
    } else {
        echo '<b><h2>'.'You have to fill the textbox with a number first'.'</b></h2>';
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>oddEvenFmod</title>
    </head>
    <body>
        <form action="oddEvenFmod.php" method="post">
            <label for="inputNumber">enter your number:</label>
            <input type="text" id="inputNumber" name="inputNumber"><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>

