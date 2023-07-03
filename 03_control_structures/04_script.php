<?php
$stock = 0;
$ordered = 3;

// This code block assigns a message to the variable 'message' based on the values of 'stock' and 'ordered'
// If 'stock' is more than 0, 'message' is set to 'In Stock'
// If 'stock' is less than or equal to 0 and 'ordered' is more than 0, 'message' is set to 'Coming Soon'
// If both 'stock' and ordered' are less than or equal to 0, 'message' is set to 'Out Of Stock'
if ($stock > 0) {
    $message = 'In Stock';
} elseif ($ordered > 0) {
    $message = 'Coming Soon';
} else {
    $message = 'Out Of Stock';
}
?>

<!DOCTYPE html>

<html>

<head>
    <title>If, Else If, Statements</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Chocolate</h2>
    <?= $message ?>
</body>

</html>