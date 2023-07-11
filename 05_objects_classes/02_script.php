<?php

// Classes must be defined with the 'class' keyword
// Class names should be in upper camel case
class Account
{
    public int $number;
    public string $type;
    public float $balance;

    public function deposit(float $amount): float
    {
        // Code to deposit money here
    }

    public function withdraw(float $amount): float
    {
        // Code to withdraw money here
    }
}

// Create a new instance of the Account class
$account = new Account();
?>