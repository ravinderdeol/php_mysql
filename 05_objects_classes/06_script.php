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

    // The 'protected' keyword means that the property can only be accessed from within the class or its descendants
    protected float $balance;

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

    // A getter method is added to the class to get the value of the protected 'balance' property
    public function getBalance(): float
    {
        return $this->balance;
    }
}

// An object is created representing the savings account
$account = new Account(20148896, 'Savings', 80.00);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Visibility Of Properties And Methods</title>
</head>

<body>
    <h1>Neo Bank</h1>

    <!-- The type of account is shown because the property is public -->
    <h2><?= $account->type ?> Account</h2>

    <!-- The get balance method is called to display the protected balance property -->
    <p>Previous Balance: $<?= $account->getBalance() ?></p>

    <!-- The deposit method adds money to the balance property -->
    <p>New Balance: $<?= $account->deposit(35.00) ?></p>
</body>

</html>