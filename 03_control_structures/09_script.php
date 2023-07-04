<?php
$price = 1.99;

// Initialize an empty string variable to store the complete message
$message = "";

// Use a for loop to iterate from 10 to 100 in increments of 10
// Concatenate and append strings to 'message' based on the current value of 'i'
for ($i = 10; $i <= 100; $i += 10) {
    $message .= "<u>$i pack(s)</u> cost <u>$" . ($price * $i) . "</u> <br><br>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>For Loops</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Prices For Large Orders Packs</h2>
    <?= $message ?>
</body>

</html>