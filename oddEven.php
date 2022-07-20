<?php
    if ($_POST) {
        $inputNumber = trim($_POST['inputNumber']);
        $inputNumber = str_replace(",",".","$inputNumber");
        $inputNumber = floor ($inputNumber);
        if (is_numeric($inputNumber)) {
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

<?php
echo '<pre>' . print_r($_POST, true) . '</pre>';
