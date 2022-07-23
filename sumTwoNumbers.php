<?php
    // TASK: Sum two numbers

    // Setting the variable to zero to stop warning inside result textbox
    $result = 0;
    if ($_POST) {
        // Trim global POST variables and check if they are numerics
        $firstNumber = trim($_POST['firstNumber']);
        $secondNumber = trim($_POST['secondNumber']);
        $errors = [];
        // Search and replace every comma with dot if the users puts the wrong /comma/ separator
        $firstNumber = str_replace(",",".","$firstNumber");
        $secondNumber = str_replace(",",".","$secondNumber");

        if (! is_numeric($firstNumber) || ! is_numeric($secondNumber)) {
            $errors[] = 'Textboxes must contain only integer or float numbers';
        }
    } else {
        // When page is loaded for a first time there's no $_POST and this message should be displayed
        $errors[] = 'Please fill first and second values';
    }

    if (empty($errors)) {
        // Sum our numbers
        $result = $firstNumber + $secondNumber;
    } else {
        // Display all errors if $errors array isn't empty
        foreach ($errors as $error) {
            echo '<b><h2>' . $error . '</b></h2>';
        }
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>sumTwoNumbers</title>
    </head>
    <body>
        <form action="sumTwoNumbers.php" method="POST">
            <label for="firstNumber">your first value:</label>
            <input type="text" id="firstNumber" name="firstNumber"><br>
            <label for="secondNumber">your second value:</label>
            <input type="text" id="secondNumber" name="secondNumber"><br>
            <input type="submit" value="Sum"><br>
            <label for="result">result:</label>
            <!-- print the summed result inside result textbox. The number is rounded to second decimal digit -->
            <input type="text" id="result" value="<?php echo round($result,2) ?>" readonly><br>
        </form>
    </body>
</html>
