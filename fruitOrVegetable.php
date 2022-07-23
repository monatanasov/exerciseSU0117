<?php
    // TASK: Print "fruit", "vegetable" or "unknown" depending on the input string

    if ($_POST) {
        $inputString = trim($_POST['inputString']);

        switch ($inputString) {
            case 'banana';
            case 'apple';
            case 'kiwi';
            case 'cherry';
            case 'lemon';
            case 'grapes';
            case 'peach';
                echo 'FRUIT!';
                break;
            case 'tomato';
            case 'cucumber';
            case 'pepper';
            case 'onion';
            case 'garlic';
            case 'parsley';
                echo 'VEGETABLE';
                break;
            default:
                echo 'UNKNOWN';
        }
    } else {
        echo '<b><h2>' . 'Please fill your string to determine is it Fruit, Vegetable or Unknown' . '</b></h2>';
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>fruitOrVegetable</title>
    </head>
<body>
    <form action="fruitOrVegetable.php" method="post">
        <label for="inputString">input your string:</label>
        <input type="text" id="inputString" name="inputString"><br>
        <input type="submit" value="submit">
    </form>
    </body>
</html>

