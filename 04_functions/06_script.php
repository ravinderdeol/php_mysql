<?php
$price = 4;
$qty = 3;

// Type declarations are used to specify the type of data that a function should receive as input and return as output
// If an argument or return can be null you can use a question mark before the type declaration, i.e. '?int' or 'int|null'
function calculate_total(int $price, int $qty): int
{
    return $price * $qty;
}

$total = calculate_total($price, $qty);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Using Type Declarations</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Chocolates</h2>
    <p>Total $<?= $total ?></p>
</body>

</html>