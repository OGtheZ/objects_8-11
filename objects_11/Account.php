<?php

class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->balance = $balance;
        $this->name = $name;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function deposit(float $deposit): void
    {
        $this->balance = $this->balance + $deposit;
    }

    public function withdraw(float $withdrawal): void
    {
        $this->balance = $this->balance - $withdrawal;
    }
}