<?php

// Define the account class and its properties
class Account
{
    public int $number;
    public string $type;
    public float $balance;

    // Add the deposit method
    // The amount parameter is the amount to add to the balance
    // 'This' keyword gets the balance property of this object
    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    // The withdraw method does the same as depositing but subtracting
    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}

// Create a new instance of the account class
$account = new Account();

// Set the balance property of the account object
$account->balance = 100.00;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Defining And Calling Methods</title>
</head>

<body>
    <h1>Neo Bank</h1>

    <!-- The deposit method is called adding a float to the account -->
    <p>Balance: $<?= $account->deposit(50.00) ?></p>
</body>

</html>