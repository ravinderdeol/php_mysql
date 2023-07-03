<?php
$day = 'Friday';

// Use the PHP 8 match expression to assign a value to 'offer' based on 'day'
// If no match is found, the default pattern assigns '10% Off Your Entire Order' to 'offer'
$offer = match ($day) {
    'Monday' => '20% Off Chocolates',
    'Tuesday' => '20% Off Mints',
    default => '10% Off Your Entire Order',
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Match Expressions</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Offers On <u><?= $day ?></u></h2>
    <p><?= $offer ?></p>
</body>

</html>
