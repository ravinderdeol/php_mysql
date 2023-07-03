<?php
$day = 'Tuesday';

// This code block assigns a value to the variable 'offer' based on the value of the variable 'day' using a switch statement
// The break statement is used to stop the execution of code in a case but is not required for the last case
// If 'day' is 'Monday', 'offer' is set to '20% Off Chocolates'
// If 'day' is 'Tuesday', 'offer' is set to '20% Off Mints'
// If 'day' does not match any of the specified cases, 'offer' is set to 'Buy Three Packs, Get One Free' using the default case
switch ($day) {
    case 'Monday':
        $offer = '20% Off Chocolates';
        break;
    case 'Tuesday':
        $offer = '20% Off Mints';
        break;
    default:
        $offer = 'Buy Three Packs, Get One Free';
}
?>

<!DOCTYPE html>

<html>

<head>
    <title>Switch Statements</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Offers On <?= $day ?></h2>
    <p><?= $offer ?></p>
</body>

</html>