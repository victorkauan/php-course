<?php
    function write($name) {
        echo "Hello! How are you, $name?<br />";
    }

    write("Victor");
    Write("Kauan");
    WRITE("Dimitri");

    function sum0($value0, $value1) {
        return $value0 + $value1;
    }

    function sum1(int $value0, int $value1) {
        return $value0 + $value1;
    }

    echo sum0(125, 575) . "<br />";
    echo sum0(10, "30 years") . "<br />"; // a non-numeric value encountered

    echo sum1(125, 575) . "<br />";
    // echo sum1(10, "30 years") . "<br />"; // $value1 must be of type int

    function make_coffee($type = "cappuccino") {
        echo "Making a cup of: $type.<br />";
    }

    make_coffee("espresso");
    make_coffee();
    make_coffee(null);
?>
