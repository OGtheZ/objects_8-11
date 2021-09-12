<?php

require_once "Account.php";

$myAccount = new Account("ThisIsMine", 100.0);

echo "Initial state " . PHP_EOL;
echo $myAccount->getName() . ", " . $myAccount->getBalance() . PHP_EOL;

echo "Final state" . PHP_EOL;
$myAccount->deposit(20.0);
echo "{$myAccount->getName()}'s balance is now: " . $myAccount->getBalance() . PHP_EOL;

echo  "______________________________________________________________________" . PHP_EOL;

$mattsAccount = new Account("Matt's account", 1000.0);
$myOtherAccount = new Account("My Account", 0);

echo "Initial state" . PHP_EOL;
echo "{$mattsAccount->getName()}'s balance is :" . $mattsAccount->getBalance() . PHP_EOL;
echo "{$myOtherAccount->getName()}'s balance is : " . $myOtherAccount->getBalance() . PHP_EOL;
$mattsAccount->withdraw(100.0);
$myOtherAccount->deposit(100.0);

echo "Final state" . PHP_EOL;
echo "{$mattsAccount->getName()}'s account balance is: " . $mattsAccount->getBalance() . PHP_EOL;
echo "{$myOtherAccount->getName()}'s account balance is: " . $myOtherAccount->getBalance() . PHP_EOL;

echo "__________________________________________________________________________________________" . PHP_EOL;

function transfer(Account $from, Account $to, int $howMuch)
{
    $from->withdraw($howMuch);
    $to->deposit($howMuch);
}

$accountA = new Account("A", 100.0);
$accountB = new Account("B", 0);
$accountC = new Account("C", 0);

echo "Initial state" . PHP_EOL;
echo "{$accountA->getName()}'s balance is: " . $accountA->getBalance() . PHP_EOL;
echo "{$accountB->getName()}'s balance is: " . $accountB->getBalance() . PHP_EOL;
echo "{$accountC->getName()}'s balance is: " . $accountC->getBalance() . PHP_EOL;

transfer($accountA, $accountB, 50);
transfer($accountA, $accountC, 25);

echo "Final state" . PHP_EOL;
echo "{$accountA->getName()}'s balance is: " . $accountA->getBalance() . PHP_EOL;
echo "{$accountB->getName()}'s balance is: " . $accountB->getBalance() . PHP_EOL;
echo "{$accountC->getName()}'s balance is: " . $accountC->getBalance() . PHP_EOL;