<?php

// Enable strict data types for function return types
declare(strict_types=1);

// Define candy array as a multi-dimensional array with product data
// Each candy type is a key, and its value is an array holding price and stock information
$candy = [
    'Toffee' => ['price' => 3.00, 'stock' => 12],
    'Mints' => ['price' => 2.00, 'stock' => 26],
    'Fudge' => ['price' => 4.00, 'stock' => 8],
];

// Declare tax as a global variable
$tax = 20;

// Define get_reorder_message function with an integer parameter that returns a string
function get_reorder_message(int $stock): string
{
    // Use a ternary operator to determine the reorder message based on stock level
    return ($stock < 10) ? 'Yes' : 'No';
}

// Define get_total_value function with float and integer parameters that returns a float
function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

// Define get_tax_due function with float and integer parameters that returns a float
function get_tax_due(float $price, int $quantity, int $tax = 0): float
{
    return ($price * $quantity) * ($tax / 100);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Full Functions Example</title>
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Stock Control</h2>
    <table>
        <tr>
            <th>Candy</th>
            <th>Stock</th>
            <th>Reorder</th>
            <th>Total Value</th>
            <th>Tax Due</th>
        </tr>

        <!-- Loop through each product in the candy array -->
        <!-- Assign the current product's name to the $product_name variable -->
        <!-- Assign the current product's data to the $data variable -->
        <?php foreach ($candy as $product_name => $data) { ?>

            <!-- Generate a table row for each product, displaying the product name, stock, reorder message, total value, and tax due -->
            <tr>
                <td><?= $product_name ?></td>
                <td><?= $data['stock'] ?></td>
                <td><?= get_reorder_message($data['stock']) ?></td>
                <td><?= get_total_value($data['price'], $data['stock']) ?></td>
                <td><?= get_tax_due($data['price'], $data['stock'], $tax) ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>