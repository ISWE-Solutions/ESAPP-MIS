<?php

namespace api\modules\v1\controllers;

class CommoditypricelevelsController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\CommodityPriceLevels';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
