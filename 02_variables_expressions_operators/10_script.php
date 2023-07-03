<?php

// Variable to hold the username
$username = 'Ivy';

// Concatenate the username with a greeting
$greeting = "Hello, $username!";

// Associative array to hold details of the offer
$offer = [
    'item' => 'Chocolate',
    'qty' => 5,
    'price' => 5,
    'discount' => 4,
];

// Calculate the usual price, offer price, saving price, and saving percentage
$usual_price = $offer['qty'] * $offer['price'];
$offer_price = $offer['qty'] * $offer['discount'];
$saving_price = $usual_price - $offer_price;
$saving_percentage = ($saving_price / $usual_price) * 100;
?>

<!DOCTYPE html>
<html>

<head>
    <title>The Sweet Shop</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Multi-Buy Offer</h2>

    <!-- Output the greeting and offer details to the browser -->
    <p><?= $greeting ?></p>
    <p>You can save $<?= $saving_price ?> (<?= $saving_percentage ?>%) on your order today.</p>
    <p>Buy <?= $offer['qty'] ?> packs of <?= $offer['item'] ?> for $<?= $offer_price ?> (usually $<?= $usual_price ?>).</p>
</body>

</html>
