<?php

// Define the customer class and its properties
class Customer
{
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;

    // Add the accounts property as an array
    public array $accounts;

    // Add the constructor method with 'accounts' as an array parameter
    function __construct(string $forename, string $surname, string $email, string $password, array $accounts)
    {
        $this->forename = $forename;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->accounts = $accounts;
    }

    // Function to concatenate the forename and surname properties
    function getFullName()
    {
        return $this->forename . ' ' . $this->surname;
    }
}
?>