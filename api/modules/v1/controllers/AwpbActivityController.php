<?php

namespace api\modules\v1\controllers;

class AwpbactivityController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbActivity';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
