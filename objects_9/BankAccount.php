<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function showUserNameAndBalance(): string
    {
        if ($this->balance > 0)
        {
            return "$this->name, $" . number_format($this->balance, 2) . PHP_EOL;
        } else {
            return "$this->name, -$" . number_format(($this->balance * -1), 2) . PHP_EOL;
        }
    }
}