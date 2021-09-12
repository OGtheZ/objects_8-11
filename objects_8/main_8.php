<?php

require_once "savingsAccount.php";

$startingBalance = ((int) readline ("How much money is in the account?: ") * 100);
$savingsAccount = new SavingsAccount($startingBalance);
$annualInterestRate = (int) readline ("Enter the annual interest rate: ");
$monthsOpen = (int) readline ("How long has the account been opened? ");

$totalDeposited = 0;
$totalWithdrawn = 0;
$totalInterest = 0;

for ($i = 1; $i <= $monthsOpen; $i++)
{
    $deposit = ((int) readline ("Enter the amount deposited for month $i: ") * 100);
    $savingsAccount->depositBalance($deposit);
    $totalDeposited += $deposit;
    $withdrawal = ((int) readline ("Enter the amount withdrawn for month $i: ") * 100);
    $savingsAccount->withdrawBalance($withdrawal);
    $totalWithdrawn += $withdrawal;
    $totalInterest += $savingsAccount->getStartingBalance() * ($annualInterestRate / 12);
    $savingsAccount->addMonthlyInterest($annualInterestRate);
}

echo "Total  deposited: $" . number_format(($totalDeposited / 100), 2,) . PHP_EOL;
echo "Total  withdrawn: $" . number_format(($totalWithdrawn / 100), 2) . PHP_EOL;
echo "Interest earned: $" . number_format(($totalInterest / 100), 2) . PHP_EOL;
echo "Ending balance: $" . number_format(($savingsAccount->getStartingBalance() / 100), 2) . PHP_EOL;