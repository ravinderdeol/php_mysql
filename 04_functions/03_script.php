<?php

// Variables declared outside of a function are called global variables and are available throughout the script
$tax = '20';

// This function takes two values as inputs, which are like variables representing the information needed for the function to work
// The variables declared inside the function are called local variables and are only available inside the function
function calculate_total($price, $quantity)
{
    $cost = $price * $quantity;
    $tax = $cost * (20 / 100);
    $total = $cost + $tax;
    return $total;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Function Using Parameters</title>
</head>

<body>
    <h1>The Sweet Shop</h1>

    <!-- Call the function and provide two values as inputs -->
    <p>Mints: $<?= calculate_total(2, 5) ?></p>
    <p>Toffee: $<?= calculate_total(3, 5) ?></p>
    <p>Fudge: $<?= calculate_total(5, 4) ?></p>
    <p>Prices include tax at: <?= $tax ?>%</p>
</body>

</html>