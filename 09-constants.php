<?php
    define("example", "Hi");
    # define("example", "How are you?"); // constant already defined

    echo example;
    # echo Example; // undefined constant
    # echo EXAMPLE; // undefined constant

    function test() {
        echo "<br />" . example . "<br />";
    }

    test();

    define("cars", ["Fusca", "Gol", "Uno"]);
    echo cars[0] . "<br />";
    echo cars[1] . "<br />";
    echo cars[2];
?>
