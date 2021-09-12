<?php

class SavingsAccount
{
    private int $startingBalance;

    public function __construct(int $startingBalance)
    {
        $this->startingBalance = $startingBalance;
    }

    public function getStartingBalance(): int
    {
        return $this->startingBalance;
    }

    public function withdrawBalance(int $withdrawal): void
    {
        $this->startingBalance = $this->startingBalance - $withdrawal;
    }

    public function depositBalance(int $deposit): void
    {
        $this->startingBalance = $this->startingBalance + $deposit;
    }

    public function addMonthlyInterest(int $annualInterest): void
    {
        $this->startingBalance = $this->startingBalance + ($this->startingBalance * ($annualInterest / 12));
    }
}