<?php

// Strict type declaration that tells PHP to only allow the specified types of data to be used in the script, e.g. int
// If there is no type declaration PHP will try to convert the data to the correct type, e.g. '4' will be converted to 4
declare(strict_types = 1);

$price = 4;
$qty = 3;

function calculate_total(int $price, int $qty): int
{
    return $price * $qty;
}

$total = calculate_total($price, $qty);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Using Strict Types</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Chocolates</h2>
    <p>Total $<?= $total ?></p>
</body>

</html>