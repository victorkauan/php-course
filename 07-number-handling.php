<?php
    $value0 = "150" + 20;
    var_dump($value0);
    echo "<br />";

    $value1 = 4 * 2.5;
    $converted_value1 = (int) $value1;
    var_dump($value1);
    var_dump($converted_value1);
    echo "<br />";

    $value2 = "100";
    $converted_value2 = (int) $value2;
    var_dump($value2);
    var_dump($converted_value2);
    echo "<br />";

    $value3 = "-25.5";
    $converted_value3 = (float) $value3;
    var_dump($value3);
    var_dump($converted_value3);
    echo "<br />";

    $value4 = 50;
    $value5 = 200.5;
    $value6 = "test";
    $value7 = "-20";
    $value8 = "-20a";

    var_dump(is_int($value4));
    var_dump(is_int($value5));
    var_dump(is_int($value6));
    var_dump(is_int($value7));
    var_dump(is_int($value8));
    echo "<br />";
    var_dump(is_float($value4));
    var_dump(is_float($value5));
    var_dump(is_float($value6));
    var_dump(is_float($value7));
    var_dump(is_float($value8));
    echo "<br />";
    var_dump(is_numeric($value4));
    var_dump(is_numeric($value5));
    var_dump(is_numeric($value6));
    var_dump(is_numeric($value7));
    var_dump(is_numeric($value8));
?>
