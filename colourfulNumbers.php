<?php

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
