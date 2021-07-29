<?php

namespace api\modules\v1\controllers;

class MgfpartnershipController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\MgfPartnership';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
