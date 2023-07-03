<?php
// The '&&' operator checks more than one condition (alternative to 'and')
// The '||' operator checks at least one condition (alternative to 'or')
// The '!' operator takes a single boolean value and negates it (alternative to 'not')

$item = 'Chocolate';
$stock = 5;
$wanted = 3;
$deliver = true;

// In PHP, a comparison resulting in 'true' is displayed as '1', and 'false' is displayed as a blank space
$can_buy = (($wanted <= $stock) && ($deliver == true));
?>

<!DOCTYPE html>

<html>

<head>
    <title>Logical Operators</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Shopping Cart</h2>
    <p>Item: <?= $item ?></p>
    <p>Stock: <?= $stock ?></p>
    <p>Ordered: <?= $wanted ?></p>
    <p>Can Buy: <?= $can_buy ?></p>
</body>

</html>