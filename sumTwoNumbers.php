<?php
    $result = 0;
    if($_POST) {
        $firstNumber = trim($_POST['firstNumber']);
        $secondNumber = trim($_POST['secondNumber']);
        $errors = [];
        if(! is_numeric($firstNumber) || ! is_numeric($secondNumber)) {
            $errors[] = 'Textboxes must contain only integer or float numbers';
        }
    } else {
        $errors[] = 'Please fill first and second values';
    }
    if (empty($errors)) {
        $result = $firstNumber + $secondNumber;
    } else {
        foreach ($errors as $error) {
            echo '<b><h2>'.$error.'</b></h2>';
        }
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Exercise</title>
    </head>
    <body>
        <form action="sumTwoNumbers.php" method="POST">
            <label for="firstNumber">your first value:</label>
            <input type="text" id="firstNumber" name="firstNumber"><br>
            <label for="secondNumber">your second value:</label>
            <input type="text" id="secondNumber" name="secondNumber"><br>
            <input type="submit"><br>
            <label for="result">result:</label>
            <input type="text" id="result" value="<?php echo round($result,2) ?>" readonly><br>
        </form>
    </body>
</html>
