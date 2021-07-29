<?php

namespace api\modules\v1\controllers;

class AwpbunitofmeasureController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbUnitOfMeasure';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
