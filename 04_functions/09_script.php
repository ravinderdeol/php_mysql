<?php

// Make a parameter optional by giving it a default value to use when no value is passed to the function
// Optional parameters often appear after parameters that are required
function calculate_cost($cost, $qty, $discount = 0)
{
    $cost = $cost * $qty;
    return $cost - $discount;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Optional Parameters And Default Values</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Chocolates</h2>
    <p>Total $<?= calculate_cost(5, 10, 5) ?></p>
    <p>Total $<?= calculate_cost(3, 4) ?></p>
    <p>Total $<?= calculate_cost(4, 15, 20) ?></p>
</body>

</html>