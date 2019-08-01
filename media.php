<!-- BASICS OF PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learning PHP - Basics</title>
</head>
<body>
    <?php
        // Outputting something to a browser's source code

        echo "Hello World!";

        // Creating variables

        $myvar = "This is my variable";
        echo $myvar;

        $number = 5;
        $number2 = 3;
        $sum = $number + $number2;
        echo $sum;

        // How to concatenate strings
    
        $name="Jake";
        echo "Hello, " . $name;

        // Checking if two variables are equal (==) or not equal (!==)

        ($x == $y)

        ($x !== $y)

        // Logical opeators 
        // Will return true if x and y are true (and) | Or will return true if x or y is true

        ($x and $y)

        ($x or $y)

        // An if statement example

        $loggedIn= true;
        if ($loggedIn == true) {
            echo "You are logged in";
        } else {
            echo "Please log in";
        }
    ?>

</body>
</html>

<!-- *Lines of code must always end in a semicolon for PHP -->


<!-- ______________________________________________________________________________________________________________________________________________________________________________ -->



<!-- HTML FORMS -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learning PHP - HTML Forms</title>
</head>
<body>

    <!-- It will send all of the information from the form to a file called process.php. A file which you need to create -->
    <!-- We can then either post the information to the page or we can put the information in the url -->

    <form action="process.php" method="post">
        Enter your name: <input input="name" type="text">
        <input type="submit">
    </form>

</body>
</html>


<!-- ______________________________________________________________________________________________________________________________________________________________________________ -->



<!-- CREATING ARRAYS AND LOOPS-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learning PHP - Creating Arrays</title>
</head>
<body>

     <?php

        $people = array("Alice", "Bob", "Catherine");
        print_r($people);
        echo $people[2];

        // For each loop

        foreach ($people as $person) {
            echo $person . ' ';
        }


        $numbers = array(5, 3, 7);
        $sum = 0;

        foreach ($numbers as $number) {
            $sum = $sum + $number;
        }
        echo $sum;

     ?>

</body>
</html>