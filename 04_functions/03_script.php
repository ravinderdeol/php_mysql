<?php

// This function takes two values as inputs, which are like variables representing the information needed for the function to work
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
</body>

</html>