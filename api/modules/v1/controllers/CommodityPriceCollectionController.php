<?php

namespace api\modules\v1\controllers;

class CommoditypricecollectionController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\CommodityPriceCollection';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
