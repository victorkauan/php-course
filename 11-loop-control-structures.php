<?php
    $x = 0;

    while($x <= 5) {
        echo "The number x is: $x.<br />";
        $x++;
    }
    
    $y = 6;
    do {
        echo "The number y is: $y.<br />";
        $y++;
    } while($y <= 5);

    for($i = 0; $i <= 10; $i++) {
        echo "The number i is: $i.<br />";
    }

    $colors = ["blue", "yellow", "green", "red"];

    foreach($colors as $color) {
        echo "The color is: $color.<br />";
    }
?>
