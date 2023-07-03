<?php

// To create an associative array, assign values to specific keys that describe the data
// Store the associative array in a variable using a descriptive name, the assignment operator, and square brackets
// Inside the brackets, use quotes for key names, the double arrow operator to associate it with a value, and separate elements with commas
$nutrition = [
    'fat' => 16,
    'sugar' => 51,
    'salt' => 6.3,
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Associative Arrays</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Nutrition (Per 100G)</h2>

    <!-- Access elements in an associative array by using the variable name holding the array, square brackets with the key enclosed in quotes, to retrieve the desired element -->
    <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
</body>

</html>