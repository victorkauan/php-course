<?php
    $hour = 12;
    if($hour < 12) {
        echo "Good morning!";
    } elseif ($hour < 18) {
        echo "Good afternoon!";
    } else {
        echo "Good evening!";
    }

    echo "<br />";

    $color = "purple";
    switch($color) {
        case "red":
            echo "The color is red";
            break;
        case "blue":
            echo "The color is blue";
            break;
        case "pink":
            echo "The color is pink";
            break;
        default:
            echo "The color $color isn't recognized";
    }
?>
