<?php
    $color = "blue";
    $color = "red";
    $COLOR = "green";
    // $1color = "yellow"; ERROR!

    echo $color . '<br />';
    echo $COLOR . '<br />';

    $_example = "Test";

    echo $_example . '<br />';

    $x = 5;
    $y = 10;

    function test() {
        global $x, $y, $z;
        $z = $x + $y;
        echo "The value of x is: $x (in)<br />";
        echo "The value of z is: $z (in)<br />";
    }
    
    test();

    echo "The value of x is: $x (out)<br />";
    echo "The value of z is: $z (out)<br />";
?>
