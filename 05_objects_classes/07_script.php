<?php

// Strict types enabled because type declarations are added to the methods
// Methods are functions that are defined inside a class
declare(strict_types=1);

// Define the account class and its properties
class Account
{
    // The 'public' keyword means that the property can be accessed from outside the class
    public array $number;
    public string $type;

    // The 'protected' keyword means that the property can only be accessed from within the class or its descendants
    protected float $balance;

    // The constructor method is used to automatically set the initial values of the object's properties when it is created
    // Without a constructor, you would have to manually assign values to the properties after creating the object
    // If no balance value is provided when creating the object, it will default to zero
    public function __construct(array $number, string $type, float $balance = 0.00)
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

// An object is created holding an associative array
$numbers = [
    'account_number' => 12345678,
    'routing_number' => 987654321,
];

// An object is created representing the savings account with the associative array passed in as an argument
$account = new Account($numbers, 'Savings', 10.00);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Using An Array In A Property Of An Object</title>
</head>

<body>
    <h1>Neo Bank</h1>
    <h2><?= $account->type ?></h2>

    <!-- The account and routing numbers are shown by calling first the object then the property and finally the key -->
    <p>Account: <?= $account->number['account_number'] ?></p>
    <p>Routing: <?= $account->number['routing_number'] ?></p>
</body>

</html>