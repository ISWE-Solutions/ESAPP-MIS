<?php

namespace api\modules\v1\controllers;

class AwpbactivitylineController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbActivityLine';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
