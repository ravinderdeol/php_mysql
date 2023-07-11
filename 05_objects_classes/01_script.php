<?php

// In an object the variables are called properties
// In an object the functions are called methods

// Classes must be defined with the 'class' keyword
// Classes are used as a template to create objects
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
?>