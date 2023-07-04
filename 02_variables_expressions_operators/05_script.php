<?php
$name = 'Ivy';
$favorites = ['Chocolate', 'Toffee', 'Fudge',];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Echo Shorthand</title>
</head>

<body>
    <h1>The Sweet Shop</h1>

    <!-- For outputting a value to the browser using PHP, shorthand for echo can be used when the PHP block is solely intended for that purpose -->
    <h2>Welcome, <?= $name ?>!</h2>
    <p>Your favorite sweet is, <?php echo $favorites[0]; ?>.</p>
</body>

</html>
