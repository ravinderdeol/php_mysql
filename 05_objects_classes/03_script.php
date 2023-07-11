<?php

// Define the customer class and its properties
class Customer
{
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;
}

// Define the account class and its properties
class Account
{
    public int $number;
    public string $type;
    public float $balance;
}

// An instance of the customer class is created and that object is stored in a variable called 'customer'
$customer = new Customer();

// An instance of the account class is created and that object is stored in a variable called 'account'
$account = new Account();

// The forename property of the customer object is given a value
$customer->forename = 'Ivy';

// The email property of the customer object is given a value
$customer->email = 'ivy@eg.link';

// The balance property of the account object is given a value
$account->balance = 1000.00;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Access And Update Properties</title>
</head>

<body>
    <h1>Neo Bank</h1>

    <!-- The two properties that were set are displayed -->
    <p>Forename: <?= $customer->forename ?></p>
    <p>Email: <?= $customer->email ?></p>
    <p>Balance: $<?= $account->balance ?></p>
</body>

</html>