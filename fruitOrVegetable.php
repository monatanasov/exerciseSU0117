<?php
    // TASK: Print "fruit", "vegetable" or "unknown" depending on the input string

    if($_POST) {
        $inputString = trim($_POST['inputString']);
    } else {
        echo '<b><h2>'.'Please fill your string to determine is it Fruit, Vegetable or Unknown'.'</b></h2>';
    }


?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>oddEvenFmod</title>
    </head>
<body>
    <form action="fruitOrVegetable.php" method="post">
        <label for="inputString">input your string:</label>
        <input type="text" id="inputString" name="inputString"><br>
        <input type="submit" value="submit">
    </form>
    </body>
</html>

