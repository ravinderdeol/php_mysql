<?php

// Include the account and customer classes
include 'classes/account.php';
include 'classes/customer.php';

// Create an indexed array which holds two objects created using the account class
$accounts = [
    new Account(20489446, 'Checking', -20),
    new Account(20148896, 'Savings', 380),
];

// New customer object created to represent the customer
$customer = new Customer('Ivy', 'Stone', 'ivy@eg.link', 'Jup!t3r2684', $accounts);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Example Of Objects And Classes</title>
</head>

<body>
    <h1>Neo Bank</h1>

    <!-- Returns the full name of the customer -->
    <h2>Name: <?= $customer->getFullName() ?></h2>
    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <!-- Goes through the array stored in the 'accounts' property of the 'customer' object -->
        <!-- Each account is held in the variable 'account' on each iteration -->
        <?php foreach ($customer->accounts as $account) { ?>
            <tr>
                <!-- Display the account number and type -->
                <td><?= $account->number ?></td>
                <td><?= $account->type ?></td>

                <!-- Display the balance using the 'getBalance' method -->
                <td><?= $account->getBalance() ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>