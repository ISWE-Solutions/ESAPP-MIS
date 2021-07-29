<?php

namespace api\modules\v1\controllers;

class AwpbcomponentController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\AwpbComponent';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
