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
    $inputNumber = trim($_POST['inputNumber']);


echo '<pre>' . print_r($_POST, true) . '</pre>';



