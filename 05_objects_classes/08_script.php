<?php

// Strict types enabled because type declarations are added to the methods
// Methods are functions that are defined inside a class
declare(strict_types=1);

// Define the account class and its properties
class Account
{
    // The 'public' keyword means that the property can be accessed from outside the class
    // 'Number' is an object of the 'account number' class
    public AccountNumber $number;
    public string $type;

    // The 'protected' keyword means that the property can only be accessed from within the class or its descendants
    protected float $balance;

    // The constructor method is used to automatically set the initial values of the object's properties when it is created
    // Without a constructor, you would have to manually assign values to the properties after creating the object
    // If no balance value is provided when creating the object, it will default to zero
    // The 'number' parameter is an object of the 'account number' class
    public function __construct(AccountNumber $number, string $type, float $balance = 0.00)
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

// Define the account number class and its properties
class AccountNumber
{
    public int $accountNumber;
    public int $routingNumber;

    // The constructor method is used to automatically set the initial values of the object's properties when it is created
    public function __construct(int $accountNumber, int $routingNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->routingNumber = $routingNumber;
    }
}

// An object is created representing the savings account
$numbers = new AccountNumber(12345678, 987654321);
$account = new Account($numbers, 'Savings', 10.00);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Using An Object As A Property Of An Object</title>
</head>

<body>
    <h1>Neo Bank</h1>
    <h2><?= $account->type ?> Account</h2>
    <p>Account: <?= $account->number->accountNumber ?></p>
    <p>Routing: <?= $account->number->routingNumber ?></p>
</body>

</html>