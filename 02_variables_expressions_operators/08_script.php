<?php
// Equal to (==): Checks if two values are equal, disregarding data type
// Identical to (===): Checks if two values are equal, including data type
// Not equal to (!=): Checks if two values are not equal, disregarding data type
// Not identical to (!==): Checks if two values are not equal, including data type
// Greater than (>): Checks if the left value is greater than the right value
// Less than (<): Checks if the left value is less than the right value
// Greater than or equal to (>=): Checks if the left value is greater than or equal to the right value
// Less than or equal to (<=): Checks if the left value is less than or equal to the right value
// Spaceship operator (<=>): Performs a three-way comparison. Returns 0 if values are equal, 1 if the left value is greater, and -1 if the left value is smaller

$item = 'Chocolate';
$stock = 5;
$wanted = 8;

// In PHP, a comparison resulting in 'true' is displayed as '1', and 'false' is displayed as a blank space
$can_buy = ($wanted <= $stock);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Comparison Operators</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Shopping Cart</h2>
    <p>Item: <?= $item ?></p>
    <p>Stock: <?= $stock ?></p>
    <p>Wanted: <?= $wanted ?></p>
    <p>Can Buy: <?= $can_buy ?></p>
</body>

</html>
