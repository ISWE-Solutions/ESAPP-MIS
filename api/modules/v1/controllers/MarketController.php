<?php

namespace api\modules\v1\controllers;

class MarketController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\Markets';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
