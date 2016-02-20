<?php

namespace app\models;

/**
 * BankAccount DAO.
 */
class BankAccount extends FlatFile
{
    protected $sourceFileName = 'bank_json.txt';
    protected $dataKey = 'bankAccounts';
}
