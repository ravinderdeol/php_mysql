<?php

// Use an indexed array when the number of data pieces to be stored is unknown and when you want to store values in a specific order
// When creating an array without specific keys for each element, PHP assigns them index numbers automatically
// To store an indexed array in a variable, use a descriptive variable name, the assignment operator, and square brackets
// Inside the square brackets, list the values the array should hold, separating each value with a comma
// In the example array below, 'chocolate' is assigned index number zero, and the index increments by one for each subsequent element
$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble Gum', 'Toffee', 'Jelly Beans',];

// Update a value in an indexed array by using the variable name holding the array, square brackets with the index number, an assignment operator, and the new desired value
$best_sellers[0] = 'Cotton Candy'
?>

<!DOCTYPE html>
<html>

<head>
    <title>The Sweet Shop</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Best Sellers</h2>

    <!-- Access items in an indexed array by using the variable name holding the array, square brackets, and the desired index number inside the brackets -->
    <ul>
        <li><?php echo $best_sellers[0]; ?></li>
        <li><?php echo $best_sellers[1]; ?></li>
        <li><?php echo $best_sellers[2]; ?></li>
        <li><?php echo $best_sellers[3]; ?></li>
        <li><?php echo $best_sellers[4]; ?></li>
        <li><?php echo $best_sellers[5]; ?></li>
    </ul>
</body>

</html>