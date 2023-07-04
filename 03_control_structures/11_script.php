<?php
$stock = 25;

if ($stock >= 10) {
    $message = 'Good Availability';
}

if ($stock > 0 && $stock < 10) {
    $message = 'Low Availability';
}

if ($stock == 0) {
    $message = 'Out Of Stock';
}
?>

<!-- 'Include': The interpreter will generate an error but keep trying to process the rest of the page -->
<!-- 'Require': The interpreter will generate an error then stop trying to process the rest of the page -->

<!-- 'Include Once': Like 'Include' but ensures the code is only included once hence uses more resources so only use when risk of duplication -->
<!-- 'Require Once': Like 'Require' but ensures the code is only included once hence uses more resources so only use when risk of duplication -->

<!-- Include the contents of the 'header.php' file at this location -->
<?php include 'includes/header.php' ?>

    <h2>Chocolate</h2>
    <p><?= $message ?></p>

<!-- Include the contents of the 'footer.php' file at this location -->
<?php include 'includes/footer.php' ?>