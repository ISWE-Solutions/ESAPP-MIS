<?php

namespace api\modules\v1\controllers;

class ProvinceController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\Provinces';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
