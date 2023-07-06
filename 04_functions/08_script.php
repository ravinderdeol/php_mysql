<?php
$stock = 20;

// Functions can return different values depending on the result of a conditional statement inside the function 
function get_stock_message($stock)
{
    if ($stock >= 10) {
        return 'Good Availability';
    }
    if ($stock > 0 && $stock < 10) {
        return 'Low Availability';
    }
    return 'Out Of Stock';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Functions With Several Returns</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Chocolates</h2>
    <p><?= get_stock_message($stock) ?></p>
</body>

</html>