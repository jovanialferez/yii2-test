<?php

namespace app\controllers;

use app\models\BankAccountService;

/**
 * REST controller for bank accounts.
 */
class BankAccountsController extends \yii\rest\Controller
{
    /**
     * List of bank accounts.
     * GET `bank-accounts`
     * 
     * @return \yii\data\ArrayDataProvider
     */
    public function actionIndex()
    {
        $service = new BankAccountService;

        return $service->search();
    }
}
