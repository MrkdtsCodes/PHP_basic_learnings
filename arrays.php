<?php

// $fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

// echo "The 2nd index in fruits Array is: $fruits[2]";
// echo '<br>';
// echo "The 3rd index in fruits Array is: $fruits[3]";
// echo '<br>';
// echo '<br>';

// echo print_r($fruits);
// echo '<br>';
// echo '<br>';
// echo var_dump($fruits);
// echo '<br>';
// echo '<br>';
// $count = count($fruits);

// echo ("the total number of fruits in my array is $count");
// echo '<br>';
// echo '<br>';

// echo "Adding PineAppple to fruits Array";
// echo '<br>';
// echo '<br>';
// $fruits[] = 'PineApple';
// echo var_dump($fruits);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/arrays.css">
</head>

<body>
    <header>
        <h2>Arrays in PHP</h2>
        <p>array is just like variables it can store different kinds
            of Data types but unlike variables that can only store "One"
            arrays can store multiple values.
        </p>
    </header>

    <main>
        <div class="box_one">

        </div>
        <div class="box_two">
            <?php
            $fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

            echo "<span class='fruit-container'>";
            foreach ($fruits as $items) {
                echo "<div>$items</div>";
            };
            echo "</span>";

            echo "The fruit in the 1st index in fruits Array is: $fruits[1]";
            echo '<br>';
            echo "The fruit in the 1st index in fruits Array is: $fruits[1]";
            echo '<br>';
            echo "The fruit in the 1st index in fruits Array is: $fruits[1]";
            echo '<br>';
            echo "The fruit in the 1st index in fruits Array is: $fruits[1]";
            echo '<br>';
            echo "The fruit in the 1st index in fruits Array is: $fruits[1]";
            echo "The fruit in the 1st index in fruits Array is: $fruits[1]";
            ?>
        </div>
        <div class="box_three"></div>
        <div class="box_four"></div>
    </main>

    <footer>
        this is the Footer
    </footer>

</body>

</html>