<?php
$name = 'Ravinder';
$greeting = 'Hello!';

// If 'name' is not empty then 'greeting' is updated with a personalized message using 'name'
if ($name !== '') {
    $greeting = "Welcome back, $name!";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>If Statements</title>
</head>

<body>
    <h1>The Sweet Shop</h1>
    <h2><?= $greeting ?></h2>
</body>

</html>