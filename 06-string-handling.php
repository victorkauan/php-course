<?php
    // strlen()
    $word = "OK";

    echo "<br />";
    echo strlen($word) . "<br />";
    echo strlen("Hey, guys!") . "<br />";

    // str_word_count()
    $sentence = "A long sentence to see how many words it has!";
    echo str_word_count($sentence) . "<br />";

    // strrev()
    echo strrev("Victor") . "<br />";

    // strpos()
    echo strpos("Hello, how are you?", "how") . "<br />";
    var_dump(strpos("Hello, how are you?", "Victor"));
    echo "<br />";

    // str_replace()
    $message = "Hello, world!";
    echo str_replace("world", "Victor", $message) . "<br />";

    $date = "28-08-2022";
    $formatted_date = str_replace("-", "/", $date);
    echo "Old date: $date and formatted date: $formatted_date<br />";

    $email = "victor@email.com.br";
    echo str_replace(".br", "", $email);
?>
