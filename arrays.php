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
        <p>Array is just like variables it can store different kinds
            of Data types but unlike variables that can only store "One",
            arrays can store multiple values.
        </p>
    </header>

    <main>
        <div class="box_one">
            2 ways to declare An Array in PHP
            <ul>
                <li>$arrayName = Array("Mark", "Andrie", "Datus")</li>
                <li>$arrayName = ["Mark", "Andrie", 56]</li>
            </ul>

            <table>
                <tr>
                    <th>Array</th>
                    <th>Examples</th>
                </tr>
                <tr>
                    <td>Indexed</td>
                    <td>$arrayName = Array("Mark", "Andrie", "Datus")</td>
                </tr>
                <tr>
                    <td>Associative</td>
                    <td>$arrayName = ["Mark" => "mark@lhooopa", "datus" => "datus@lhoopa"]</td>
                </tr>
                <tr>
                    <td>Multi-dimensional</td>
                    <td>$matrix = [[1,2,3], [4,5,6] ]</td>
                </tr>
            </table>

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
            echo "The fruit in the 2nd index in fruits Array is: $fruits[2]";
            echo '<br>';
            echo "The fruit in the 3rd index in fruits Array is: $fruits[3]";
            echo '<br>';
            echo "The fruit in the 4th index in fruits Array is: $fruits[4]";
            echo '<br>';
            ?>
        </div>
        <div class="box_three">
            <span>Debugger in PHP</span>

            <table>
                <tr>
                    <th>Debugger</th>
                    <th>Meaning</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td>print_r</td>
                    <td>Shows the index and values of the array</td>
                    <td>Array ( [0] => Apple [1] => Banana [2] => Mango [3] => Orange [4] => Grapes )</td>

                </tr>
                <tr>
                    <td>var_dump</td>
                    <td>Shows the complete index and datatype values of the array</td>
                    <td>array(5) { [0]=> string(5) "Apple" [1]=> string(6) "Banana" [2]=> string(5) "Mango" [3]=>
                        string(6) "Orange" [4]=> string(6) "Grapes" }</td>
                </tr>

            </table>

        </div>
        <div class="box_four"></div>
    </main>

    <footer>
        this is the Footer
    </footer>

</body>

</html>