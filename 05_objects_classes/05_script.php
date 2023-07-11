<?php

// Strict types enabled because type declarations are added to the methods
// Methods are functions that are defined inside a class
declare(strict_types=1);

// Define the account class and its properties
class Account
{
    // The 'public' keyword means that the property can be accessed from outside the class
    public int $number;
    public string $type;
    public float $balance;

    // The constructor method is used to automatically set the initial values of the object's properties when it is created
    // Without a constructor, you would have to manually assign values to the properties after creating the object
    // If no balance value is provided when creating the object, it will default to zero
    public function __construct(int $number, string $type, float $balance = 0.00)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    // The deposit and withdraw methods return the updated balance
    public function deposit(float $amount): float
    {
        // The 'this' keyword refers to the current object (instance) of the class
        // In this context, '$this->balance' accesses the 'balance' property of the current object
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}

// Two objects are created with one representing the checking account and the other the savings account
$checking = new Account(43161176, 'Checking', 32.00);
$savings =  new Account(20148896, 'Savings', 756.00);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Using Constructors With A Class</title>
</head>

<body>
    <h1>Neo Bank</h1>
    <h2>Account Balances</h2>
    <table>
        <tr>
            <th>Date</th>

            <!-- Output the 'type' property of the 'checking' and 'savings' object as a table header -->
            <th><?= $checking->type ?></th>
            <th><?= $savings->type ?></th>
        </tr>
        <tr>
            <td>23 June</td>

            <!-- Output the 'balance' property of the 'checking' and 'savings' object as a table cell -->
            <td>$<?= $checking->balance ?></td>
            <td>$<?= $savings->balance ?></td>
        </tr>
        <tr>
            <td>24 June</td>

            <!-- Call the 'deposit' and 'withdraw' method of the 'checking' and 'savings' objects then output the returned values as a table cell -->
            <td>$<?= $checking->deposit(12.00) ?></td>
            <td>$<?= $savings->withdraw(100.00) ?></td>
        </tr>
        <tr>
            <td>25 June</td>

            <!-- Call the 'withdraw' and 'savings' method of the 'checking' and 'savings' objects then output the returned values as a table cell -->
            <td>$<?= $checking->withdraw(5.00) ?></td>
            <td>$<?= $savings->deposit(300.00) ?></td>
        </tr>
    </table>
</body>

</html>