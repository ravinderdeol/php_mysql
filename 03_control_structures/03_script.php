<?php
$stock = 5;

// Assigns 'In Stock' to $message if $stock is greater than 0, otherwise assigns 'Out Of Stock'
$message = ($stock > 0) ? 'In Stock' : 'Out Of Stock';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ternary Operators</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
</body>

</html>