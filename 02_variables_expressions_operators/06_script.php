<?php

// This example demonstrates the use of mathematical operators with numbers to calculate order costs
$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax
?>

<!DOCTYPE html>
<html>

<head>
    <title>Arithmetic Operators</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Shopping Cart</h2>
    <p>Items: $<?= $items ?></p>
    <p>Cost Per Pack: $<?= $cost ?></p>
    <p>Subtotal: $<?= $subtotal ?></p>
    <p>Tax: $<?= $tax ?></p>
    <p>Total: $<?= $total ?></p>
</body>

</html>