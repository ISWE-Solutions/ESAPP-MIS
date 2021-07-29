<?php

namespace api\modules\v1\controllers;

class CommoditytypeController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\CommodityType';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
