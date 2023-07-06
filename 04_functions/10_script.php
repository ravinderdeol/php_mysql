<?php

// You can put parameter names before arguments meaning arguments do not need to be passed in the order they are defined
// If you do not name arguments they must be passed in the order they are defined
function calculate_cost($cost, $qty, $discount = 0, $tax = 20,)
{
    $cost = $cost * $qty;
    $tax = $cost * ($tax / 100);
    return ($cost + $tax) - $discount;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Named Arguments</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Chocolates</h2>

    <!-- Function is called with four named arguments which can appear in any order because they are named -->
    <p>Dark Chocolate: $<?= calculate_cost(qty: 10, cost: 5, tax: 5, discount: 2); ?></p>

    <!-- Named arguments are used and the default value will be applied to discount -->
    <p>Milk Chocolate: $<?= calculate_cost(qty: 10, cost: 5, tax: 5); ?></p>

    <!-- First two arguments relate to 'cost' and 'quantity' then 'tax' is named because discount is not passed in -->
    <p>White Chocolate: $<?= calculate_cost(5, 10, tax: 5); ?></p>
</body>

</html>