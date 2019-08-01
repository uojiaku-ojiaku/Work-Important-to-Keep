<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <!-- To access the post data, we need to use a special variable called $_POST. This variable is an array -->
    <!-- All you have to do is type in the square brackets in quotes the name of the input you want, from what you called it in your previous post code -->

    <?php

        $name = $_POST["name"];
        echo "Hello, " . $name;
    ?>
</body>
</html>

