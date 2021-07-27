<?php

namespace api\modules\v1\controllers;

class DistrictController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\District';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
