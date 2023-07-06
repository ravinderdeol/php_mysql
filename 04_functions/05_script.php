<?php
$us_price = 4;

// This variable stores an associative array of three exchange rates
$rates =
    [
        'uk' => 0.81,
        'eu' => 0.93,
        'jp' => 113.21,
    ];

// This function calculates prices of an item in three currencies then returns them as an associative array
// Functions should only perform one task but that one task can return multiple values hence the use of an array
function calculate_prices($usd, $exchange_rates)
{
    $prices =
        [
            'pound' => $usd * $exchange_rates['uk'],
            'euro' => $usd * $exchange_rates['eu'],
            'yen' => $usd * $exchange_rates['jp'],
        ];

    return $prices;
}

// The function is called and the array it returns is stored in a variable
$global_prices = calculate_prices($us_price, $rates);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Functions And Compound Data Types</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Chocolates</h2>
    <p>US $<?= $us_price ?></p>
    <p>
        (UK &pound;<?= $global_prices['pound'] ?> |
        EU &euro;<?= $global_prices['euro'] ?> |
        JP &yen;<?= $global_prices['yen'] ?>)
    </p>
</body>

</html>