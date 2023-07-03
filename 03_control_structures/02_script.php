<?php
$stock = 5;

// Assigns 'In Stock' to $message if $stock is greater than 0, otherwise assigns 'Out Of Stock'
if ($stock > 0) {
    $message = 'In Stock';
} else {
    $message = 'Out Of Stock';
}
?>

<!DOCTYPE html>

<html>

<head>
    <title>If Else Statements</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
</body>

</html>