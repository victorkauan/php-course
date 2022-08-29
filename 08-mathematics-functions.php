<?php
    # pi()
    echo "<br />";
    echo pi() . "<br />";

    # min() and max()
    $numbers = [1, 10, 40, 5000, -20, 15];
    echo min($numbers) . "<br />";
    echo max($numbers) . "<br />";

    # abs()
    $number0 = -20;
    $number1 = -0.5;
    echo abs($number0) . "<br />";
    echo abs($number1) . "<br />";

    # sqrt()
    echo sqrt(100) . "<br />";
    echo sqrt(25) . "<br />";
    echo sqrt(5) . "<br />";

    # round()
    $number2 = 8.25;
    $number3 = 5.72;
    $number4 = 4.5;
    echo round($number2) . "<br />";
    echo round($number3) . "<br />";
    echo round($number4) . "<br />";

    # rand()
    echo rand() . "<br />";
    echo rand(0, 20);
?>
