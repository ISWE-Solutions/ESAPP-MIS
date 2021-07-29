<?php

namespace api\modules\v1\controllers;

class AwpbcommoditytypesController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbCommodityTypes';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
