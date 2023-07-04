<?php
$counter = 1;
$packs = 5;
$price = 1.99;

// Initialize an empty string variable to store the complete message
$message = "";

// Use a while loop to concatenate and append strings to 'message' until 'counter' exceeds 'packs'
while ($counter <= $packs) {
    $message .= "Buy <u>$counter pack(s)</u> for <u>$" . ($counter * $price) . "</u> <br><br>";
    $counter++;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>While Loops</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Prices For Multiple Packs</h2>
    <p><?= $message ?></p>
</body>

</html>