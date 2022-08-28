<?php
    # String
    $string0 = "Victor";
    $string1 = "<h1>Hello, world!</h1>";

    var_dump($string0);
    echo '<br />';
    var_dump($string1);
    echo '<br />';

    # Integer
    $integer0 = 345;
    $integer1 = -34;
    $integer2 = $integer0 + $integer1;

    var_dump($integer2);
    echo '<br />';

    # Float
    $float0 = 3.5;

    var_dump($float0);
    echo '<br />';

    # Boolean
    $boolean0 = true;
    $boolean1 = false;

    var_dump($boolean0);
    echo '<br />';
    var_dump($boolean1);
    echo '<br />';

    # Array
    $cars = array("Fusca", false, "Brasília", 15.5, "Chevette", 2022);
    # $cars = ["Fusca", "Brasília", "Chevette"];

    var_dump($cars);
    echo '<br />';

    # Object
    # - Class
    class car {
        public $color;
        public $model;

        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }

        public function message() {
            return "The car is $this->color and its model is $this->model.";
        }
    }

    $object0 = new car("white", "Fusca");
    $object1 = new car("red", "Ferrari");

    echo $object0->message();
    echo '<br />';
    echo $object1->message();
    echo '<br />';
    var_dump($object0);
    echo '<br />';
    var_dump($object1);
    echo '<br />';

    # NULL
    $null = "Hi";
    $null = null;

    var_dump($null);
    echo '<br />';
?>
