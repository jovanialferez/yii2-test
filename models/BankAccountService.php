<?php

namespace app\models;

use \yii\data\ArrayDataProvider;

/**
 * Service class for accessing bank accounts records.
 */
class BankAccountService extends \yii\base\Object
{
  /**
   * Return data provider with records filtered according
   * to parameters or attributes.
   *
   * @param  array $params
   * @return yii\data\ArrayDataProvider
   */
  public function search($params = [])
  {
      $model = new BankAccount;
      return new ArrayDataProvider([
          'allModels' => $model->collection,
          'pagination' => [
              'pageSize' => 10,
          ],
      ]);
  }
}
