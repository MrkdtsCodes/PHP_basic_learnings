<?php

echo 'Hello PLP';  //does not return
echo '<br>';   // can store HTML value
// echo '<input></input>';
print 'Hello Pam';  //can return value 1
echo '<br>';
echo "=========================================================";
$result = print "";

echo $result;
//this is a single line comment
# this is also a single line comment

/* this is a multi line comment
    hahaah
    balik kana please
    */
echo '<br>';

//VARIABLES

$Fname = "Mark";
$Lname = "Datus";
$age = 21;
$favorite_color = "Red";

echo 'My name is ' . ' ' . $Fname . " " . $Lname . ' I am ' . $age . ' and I love the color ' . $favorite_color;
echo '<br>';
echo 'my name is $Fname'; // di gagana
echo '<br>';
echo "my name is $Fname";
echo '<br>';


$url = 'https://www.facebook.com/psscofficial';

$text = "mark";

echo '<a href="' . $url . '">' . $text . '</a>';

echo '<br>';
$sentences = "I am Learning";
echo $sentences . ' PHP ' . ' variables' . ' Today';
echo '<br>';


$item_name = "IEM Earphones";
$price = 1300;
$quantity = 4;
$Total = $price * $quantity;


echo "I bought $quantity $item_name that is $price for one and the total bill is $$Total";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>