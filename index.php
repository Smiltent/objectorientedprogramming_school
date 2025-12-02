<?php
    include_once "BankAccount.php";

    $jokabBankAccount = new BankAccount("other persons name");
    $theAccount = new BankAccount("my name");

    $jokabBankAccount->deposit(676767);
    $theAccount->deposit(50);

    $theAccount->withdraw(2);

    $jokabBankAccount->printInfo();
    $theAccount->printInfo();
