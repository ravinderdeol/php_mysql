<?php

// Variables begin with a dollar sign, using only letters, numbers, and underscores (no dashes or periods)
// Avoid using 'this' as a variable name due to its special meaning
// Variables are case sensitive
// PHP has three scalar data types: string, numeric, and boolean
// Boolean values should be assigned as 'true' or 'false' in all lowercase
// Variables can be overwritten by assigning them a new value, similar to other programming languages
$name = 'Ravinder';
$price = 10;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Variables</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2>Welcome, <?php echo $name; ?></h2>
    <p>The cost of your sweet is $<?php echo $price; ?> per pack.</p>
</body>

</html>