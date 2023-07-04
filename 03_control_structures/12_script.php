<?php
$name = 'Ivy';

// Check if the value of 'name' is empty then assign a specific greeting depending on the result
$greeting = ($name) ? "Welcome back, $name!" : 'Hello!';

$product = 'Lollipop';
$cost = 2;

$rows = '';

// Iterate through quantities from 1 to 10
for ($qty = 1; $qty <= 10; $qty++) {
    
    // Calculate the subtotal by multiplying cost and quantity
    $subtotal = $cost * $qty;
    
    // Calculate the discount by applying a discount percentage of 4 times the quantity
    $discount = ($subtotal / 100) * ($qty * 4);

    // Calculate the total by subtracting the discount from the subtotal
    $total = $subtotal - $discount;

    // Append a table row (tr) to the 'rows' variable, displaying the quantity and total in table cells (td)
    $rows .= "<tr><td>$qty</td><td>$$total</td></tr>";
}
?>

<!-- Include the contents of the 'header.php' file at this location -->
<?php require 'includes/header.php'; ?>

    <p><?= $greeting ?></p>

    <h2><?= $product ?> Discounts</h2>

    <table>
        <tr>
            <th>Qty</th>
            <th>Total</th>
        </tr>
        <?= $rows ?>
    </table>

<!-- Include the contents of the 'footer.php' file at this location -->
<?php require 'includes/footer.php'; ?>