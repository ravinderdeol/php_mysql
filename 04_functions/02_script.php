<?php

// Functions only run when they are called regardless of where they are in the script
// Functions that return a value use the 'return' keyword
// It is better practice to have a function return a value then write to the screen
// If you are using a function across multiple pages you can include it in the 'includes' folder
function copyright_notice()
{
    $year = date('Y');
    $message = '&copy; ' . $year;
    return $message;
}

// The returned value from functions can also be assigned to variables
$copyright = copyright_notice();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Basic Functions</title>
</head>

<body>
    <h1>Welcome To The Sweet Shop</h1>
    <footer>
        <p><?= $copyright ?></p>
    </footer>
</body>

</html>