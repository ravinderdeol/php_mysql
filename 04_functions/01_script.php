<?php
function copyright_notice()
{
    $year = date('Y');
    echo '&copy; ' . $year;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Basic Functions</title>
</head>

<body>
    <h1>Welcome To The Sweet Shop</h1>
    <footer>
        <p><?= copyright_notice(); ?></p>
    </footer>
</body>

</html>