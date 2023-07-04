<?php
$packs = 8;
$price = 0.99;

// Initialize an empty string variable to store the complete message
$message = "";

// Use a do while loop to concatenate and append strings to 'message' until 'packs' becomes zero
do {
    $message .= "<u>$packs pack(s)</u> cost <u>$" . ($packs * $price) . "</u> <br><br>";
    $packs--;
} while ($packs > 0);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Do While Loops</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Prices Of Multiple Packs</h2>
    <?= $message ?>
</body>

</html>