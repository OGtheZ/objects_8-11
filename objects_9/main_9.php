<?php

require_once "BankAccount.php";
$ben = new BankAccount("Benson", -17.5);

echo $ben->showUserNameAndBalance();