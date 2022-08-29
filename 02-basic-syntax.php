<?php
    $text = "Hello, world!";
    $html = "<h1>Hello, PHP!</h1><p>How cool!</p>";
    $js = "<script>alert('Created with PHP!');</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic Syntax</title>
</head>
<body>
    <h1><?php echo $text; ?></h1>
    <?php echo $html; ?>
    <?php echo $js; ?>

    <?php $activated = true; ?>
    <?php if($activated) { ?>
        <h1>It's activated!</h1>
    <?php } else { ?>
        <h1>It's not activated!</h1>
    <?php } ?>

    <?php
        // PHP keywords are case-insensitive
        echo "<p>Hello, how are you? (1)</p>";
        Echo "<p>Hello, how are you? (2)</p>";
        ECHO "<p>Hello, how are you? (3)</p>";

        // PHP variables are case-sensitive
        $color = "red";
        echo "<p>The color is $color</p>";
        // echo "<p>The color is $Color</p>"; // undefined variable
        // echo "<p>The color is $COLOR</p>"; // undefined variable

        // Simple comment
        # Simple comment
        /*
            Multi-line comment
        */
    ?>
</body>
</html>
