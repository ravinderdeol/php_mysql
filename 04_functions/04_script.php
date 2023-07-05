<?php
$tax_rate = 0.2;

// Functions can only access and update global variables if they are declared as 'global' inside the function
// Functions delete any local variables when they finish running unless they are declared as 'static' inside the function
function calculate_running_total($price, $quantity)
{
    // The global keyword allows us to access the global variable 'tax rate' inside the function
    global $tax_rate;

    // The static keyword allows us to keep the value of the variable between function calls (i.e. it is not reset to 0 each time the function is called)
    static $running_total = 0;
    $total = $price * $quantity;
    $tax = $total * $tax_rate;
    $running_total = $running_total + $total + $tax;
    return $running_total;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Global And Static Variables</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Running Total</th>
        </tr>
        <tr>
            <td>Mints:</td>
            <td>$2</td>
            <td>5</td>
            <td>$<?= calculate_running_total(2, 5) ?></td>
        </tr>
        <tr>
            <td>Toffee:</td>
            <td>$3</td>
            <td>5</td>
            <td>$<?= calculate_running_total(3, 5) ?></td>
        </tr>
        <tr>
            <td>Fudge:</td>
            <td>$5</td>
            <td>4</td>
            <td>$<?= calculate_running_total(5, 4) ?></td>
        </tr>
    </table>
</body>

</html>