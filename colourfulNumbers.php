<?php
    // TASK: Print all numbers from 1 to n and display Odd in blue, Even in green
    // Use ul li span

/*
    // Method 1
    $num = 10;
    for ($i=1; $i <= $num; $i++) {
        echo '<ul>';
        if ($i % 2 == 0) {
            echo '<li>' . '<span style="color:green">' . $i . '</span>' . '</li>';
        } else {
            echo '<li>' . '<span style="color:blue">' . $i . '</span>' . '</li>';
        }
        echo '</ul>';
    }
*/
    // Method 2
    $num = 10;

    for ($i=1; $i <= $num; $i++) {
    $color = 'blue';
        echo '<ul>';
        if ($i % 2 == 0) {
            $color = 'green';
        }
        echo "<li><span style='color:$color'> $i </span></li>";
        echo '</ul>';
    }
