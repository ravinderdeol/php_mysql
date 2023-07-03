<?php

// A multidimensional array represents data with arrays within arrays, it is useful for organizing tabular data, like rows of a table
// Each row can be represented by an element in an indexed array, each element can contain an associative array with details such as name, age, and country
$students = [
    ['name' => 'Ivy', 'age' => 32, 'country' => 'France',],
    ['name' => 'Emi', 'age' => 24, 'country' => 'Japan',],
    ['name' => 'Luke', 'age' => 47, 'country' => 'Thailand',],
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Dashboard</title>
</head>

<body>
    <h1>Student Dashboard</h1>
    <h2>Students</h2>

    <!-- Retrieve student data from the associative array by using the variable name of the indexed array and the desired index number, then enclose the key in quotes within brackets to access the element -->
    <p><?php echo $students[0]['name']; ?> - <?php echo $students[0]['age']; ?> (<?php echo $students[0]['country']; ?>)</p>
    <p><?php echo $students[1]['name']; ?> - <?php echo $students[1]['age']; ?> (<?php echo $students[1]['country']; ?>)</p>
    <p><?php echo $students[2]['name']; ?> - <?php echo $students[2]['age']; ?> (<?php echo $students[2]['country']; ?>)</p>
</body>

</html>