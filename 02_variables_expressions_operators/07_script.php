<?php
$name = 'Ivy';

// The concatenation operator in PHP is a dot and it joins strings together
$prefix_one = 'Thank you';
$message_one = $prefix_one . ', ' . $name;

// String variables can be directly joined using double quotes, as the PHP interpreter replaces the variable names within double quotes with their corresponding values
$prefix_two = 'Please visit again';
$message_two = "$prefix_two, $name";

// The concatenating assignment operator appends text to an existing variable, providing a shorthand method for creating an updated string
$prefix_three = 'Goodbye for now, ';
$prefix_three .= $name;
?>

<!DOCTYPE html>

<html>

<head>
    <title>String Operator</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2><?= $name ?>'s Order</h2>
    <p><?= $message_one ?>.</p>
    <p><?= $message_two ?>.</p>
    <p><?= $prefix_three ?>.</p>
</body>

</html>