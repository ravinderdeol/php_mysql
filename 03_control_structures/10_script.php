<?php

// Associative array
$products = ['Toffee' => 2.99, 'Mints' => 1.99, 'Fudge' => 3.49];

// Indexed array
$bestsellers = ['Chocolate', 'Marshmallows'];

// Empty string variable to store complete product rows
$product_rows = '';

// Empty string variable to store complete bestseller rows
$bestseller_rows = '';

// Iterate over each element in the 'products' array using a foreach loop
// For each element, assign the key to 'product' and the value to 'price'
// Concatenate a new table row (tr) with two table cells (td) to 'product rows', displaying 'product' and 'price'
// The resulting string is appended to 'product rows' in each iteration
foreach ($products as $product => $price) {
    $product_rows .= "<tr><td>$product</td> <td>$price</td></tr>";
}

// Iterate over each element in the 'bestsellers' array using a foreach loop
// For each element, assign it to 'bestseller'
// Concatenate a new table row (tr) with a single table cell (td) displaying the value of 'bestseller'
// The resulting string is appended to 'bestseller rows' in each iteration
foreach ($bestsellers as $bestseller) {
    $bestseller_rows .= "<tr><td>$bestseller</td></tr>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>For Each Loops</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Price List</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?= $product_rows ?>
    </table>
    <h2>Bestsellers</h2>
    <table>
        <tr>
            <th>Item</th>
        </tr>
        <?= $bestseller_rows ?>
    </table>
</body>

</html>